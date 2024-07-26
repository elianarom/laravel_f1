<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Escuderia;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Symfony\Component\Yaml\Escaper;
use Intervention\Image\Laravel\Facades\Image;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticia::with(['escuderia', 'categorias'])->paginate(3);

        return view('noticias.index', [
            'noticias' => $noticias,
        ]);
    }

    public function vista(int $id)
    {
        $noticia = Noticia::findOrFail($id);

        return view('noticias.vista', [
            'noticia' => $noticia,
        ]);
    }

    public function crearNoticia()
    {
        return view('noticias.crearNoticia', [
            'escuderias' => Escuderia::all(),
            'categorias' => Categoria::orderBy('nombre')->get(),
        ]);
    }

    public function crearProceso(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        $input = $request->only(['titulo', 'descripcion', 'escuderia_fk', 'portada_descripcion']);

        if($request->hasFile('portada') && $request->file('portada')->isValid()) {
            $input['portada'] = $request->file('portada')->store('imgs');
            Image::read(\Storage::path($input['portada']))
            ->coverDown(912, 768)
            ->save();
        }

        $noticia = Noticia::create($input);
        $noticia->categorias()->attach($request->input('categoria_fks', []));

        return redirect()
            ->route('admin.dashboard')
            ->with('mensaje', 'La noticia <b>' . e($input['titulo']) . ' </b> se publicó con éxito.');
    }

    public function editarForm(int $id)
    {
        return view('noticias.editarForm', [
            'noticia' => Noticia::findOrFail($id),
            'escuderias' => Escuderia::all(),
            'categorias' => Categoria::orderBy('nombre')->get(),
        ]);
    }

    public function editarProceso(int $id, Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        $input = $request->only(['titulo', 'descripcion', 'escuderia_fk', 'portada_descripcion']);

        $noticia = Noticia::findOrFail($id);

        $oldPortada = $noticia->portada;

        if($request->hasFile('portada')) {
            $input['portada'] = $request->file('portada')->store('imgs');
            Image::read(\Storage::path($input['portada']))
            ->coverDown(912, 768)
            ->save();
        }

        $noticia->update($input);
        $noticia->categorias()->sync($request->input('categoria_fks', []));

        if($request->hasFile('portada') && $oldPortada !== null && \Storage::exists($oldPortada)) {
            \Storage::delete($oldPortada);
        }

        return redirect()
            ->route('admin.dashboard')
            ->with('mensaje', 'La noticia <b> ' . e($input['titulo']) . ' </b> se editó con éxito.');
    }

    public function eliminarForm(int $id)
    {
        return view('noticias.eliminarForm', [
            'noticia' => Noticia::findOrFail($id),
        ]);
    }

    public function eliminarProceso(int $id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->categorias()->detach();
        $noticia->delete();

        if($noticia->portada !== null && \Storage::exists($noticia->portada)) {
            \Storage::delete($noticia->portada);
        }

        return redirect()
            ->route('admin.dashboard')
            ->with('mensaje', 'La noticia <b>' . e($noticia->titulo) . ' </b>se eliminó con éxito.');
    }
}
