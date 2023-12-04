@extends('layouts.app')

@section('title')
    modifer - {{ $user->nom }}
@endsection

@section('contenue')

    <div class="wrapper">


        <section class="main-container m-5">
            <form method="post" action="{{ route('usager.update',$user->id) }}">
                @csrf
                @method('PATCH')

                <div class="form-group  mb-3">
                    <label for="nom">email</label>
                    <input value="{{ $user->email }}" type="email" class="form-control" id="email" placeholder="email"
                           name="email">
                    @error('email')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group  mb-3">
                    <label for="nom">Nom</label>
                    <input value="{{ $user->nom }}" type="text" class="form-control" id="nom" placeholder="Nom"
                           name="nom">
                    @error('nom')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group  mb-3">
                    <label for="nom">Prenom</label>
                    <input value="{{ $user->prenom }}" type="text" class="form-control" id="prenom" placeholder="prenom"
                           name="prenom">
                    @error('prenom')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group  mb-3">
                    <label for="nom">nomUsager</label>
                    <input value="{{ $user->nomUsager  }}" type="text" class="form-control" id="nomUsager"
                           placeholder="nomUsager" name="nomUsager">
                    @error('nomUsager')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group  mb-3">
                    <label for="nom">Password</label>
                    <input  type="password" class="form-control" id="password"
                           placeholder="password" name="password">
                    @error('password')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="nom">Role</label>
                    <select name="role" id="role" class="form-control">

                        <option value="admin">admin</option>
                        <option value="normal">normal</option>
                        <option value="kid">kid</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>

        </section>

    </div>

@endsection
