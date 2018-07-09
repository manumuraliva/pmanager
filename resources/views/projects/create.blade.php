@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">
        <div class="jumbotron">

            <form method="post" action="{{ route('projects.store') }}">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Name</label>
                    <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name"  required >
                </div>
                @if($companies == null)
                <input   
                    class="form-control"
                    type="hidden"
                    name="company_id"
                    value="{{ $company_id }}"
                    />


                @endif

                @if($companies != null)
                <div class="form-group">
                    <label for="company-content">Select company</label>

                    <select name="company_id" class="form-control" > 

                        @foreach($companies as $company)
                        <option value="{{$company->id}}"> {{$company->name}} </option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Days</label>
                    <input type="text" id="inputEmail" name="days" class="form-control" placeholder="Days"  required >
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Description</label>
                    <textarea id="inputEmail" name="description" class="form-control" placeholder="Description" rows="20" cols="30" required ></textarea>
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>


        @endsection