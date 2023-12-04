@extends('layouts.app')

@section('title')
    Utilisateurs
@endsection

@section('contenue')

    <div class="wrapper">

        <section class="main-container m-5">
            <a href="{{ route('usager.create') }}" class="btn btn-primary w-25 mb-5">Ajouter</a>
            <table class="table">
                <thead>
                <tr>

                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom utilisateur</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->nomUsager }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('usager.edit',$user->id) }}" class="btn btn-primary">modifier</a>
                            <form action="{{ route('usager.destroy',$user->id) }}" class="mt-3" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>

@endsection
