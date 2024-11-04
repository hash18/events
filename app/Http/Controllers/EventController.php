<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //mostra a home page com todos os eventos
    public function index(){

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }
    //mostra o formulário de cadastro da view
    public function create(){
        return view('events.create');
    }

    //armazena dados
    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            //pega a imagem original
            $requestImage = $request->image;

            //pega a extensão
            $extension = $requestImage->extension();

            //renomeia, coloca o nome original com a data e hora atualizadas
            $imageName = md5( $requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            //move a imagem para o diretório
            $request->image->move(public_path('img/events'), $imageName);

            //é o que vai salvar no banco de fato
            $event->image = $imageName;
        }

        $event->save();
                             //flash message, (mensagem de sessão) sendo enviado para a view main
        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }
    
    //exibe um registro específico do banco de dados
    public function show ($id){

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
