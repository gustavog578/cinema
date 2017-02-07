<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\Http\Requests;
use cinema\Http\Requests\UserUpdateRequest;
use cinema\Http\Requests\UserCreateRequest;
use cinema\Http\Controllers\Controller;
use cinema\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;


class UsuarioController extends Controller
{

    /**
     * UsuarioController constructor.
     */
    public function __construct(){

       $this->beforeFilter('@find',['only' => ['edit', 'update','destroy']]);
       //$this->middleware('@find' , ['only' => ['edit', 'update','destroy'] ]);

    }
    public function find($route){

        $this->user = User::find($route->getParameter('usuario'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        ////////////Mostrar solo los eliminados//////////////
        // $users = \cinema\User::onlyTrashed()->paginate(2);
        /////////////////////////////////////////////////////
      $users = User::paginate(2);

      if($request->ajax()){
          return response()->json(view('usuario.users',compact('users'))->render());
      }

      return view('usuario.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        //$this->validate($request, ['']); VALIDAR
        User::create($request->all());
        Session::flash('message', 'Usuario creado con exito');
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $user = User::find($id);

        return view('usuario.edit',['user'=> $this->user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->user->fill($request->all());
        $this->user->save();
        Session::flash('message', 'Usuario modificado con exito');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->user->delete($id);
       Session::flash('message', 'Usuario Eliminado con exito');
        return Redirect::to('/usuario');
    }
}
