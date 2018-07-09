@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">
        <div class="jumbotron">

            <form method="post" action="{{ route('companies.store') }}">
                {{ csrf_field() }}

                
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Name</label>
                    <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name"  required >
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Description</label>
                    <textarea id="inputEmail" name="description" class="form-control" placeholder="Description" rows="20" cols="30" required ></textarea>
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>


        @endsection