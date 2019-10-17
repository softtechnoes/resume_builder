@extends('master_user')
@section('title')
Comments
@stop
@section('content')
<main>

    <!-- Container -->
    <div class="container scrollspy" id="started-section">

       

        <!-- Section About -->
        <div class="section about scrollspy" id="about-section">

            <!-- Title -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="grey-text text-darken-2 left-align">Comments</h5>
                </div>
            </div>
      
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="text-box">
                            <?php $comments = App\TestComment::get(); 
                            // dd($comment);
                            ?>
                            
                            @comments(['model' => $comments])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
