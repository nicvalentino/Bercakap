<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Forum</title>
</head>
<body>
    @extends('navbar')

    <!-- SEARCH BAR -->
    <form action="/forum">
        <div class="input-box" style="margin-right:5rem">
            <input type="text" placeholder="Cari Pertanyaan" class = "form-control" name="search" value = "{{ request('search') }}">
            <i class="bi bi-search"></i>
        </div>
    </form>
    <!-- SEARCH BAR -->


    <!-- FORUM -->
    <div class="container-fluid" style="background-color: #F6F7FF; padding-top: 2rem; padding-bottom: 8rem">
        <!-- TYPE -->
        <div class="row" style="margin-left: 23.5rem">
            <a href="/ask">
                <div class="btn text-muted" style="background: #EAEAEA; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.3rem; padding-top: .2rem; padding-left: .5rem; padding-right: .5rem; border-radius: 0.8rem;">
                    <i class="bi bi-plus-circle"></i>
                    Pertanyaan Baru
                </div>
            </a>
        </div>
        <!-- TYPE -->

        <!-- QUESTIONS -->
        @foreach ($pertanyaan as $tanya)
            
            <div class="card mx-auto p-4" style="width: 750px; margin-top: 1.8rem; box-shadow: 4px 4px 4px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);">
                <div class="row">
                    <div class="col">
                        <p style="margin-bottom: 0; font-weight: 600;">{{ $tanya->user->name }}</p>
                    </div>

                    <!-- DELETE -->

                    @if(Auth::id() == $tanya->user->id)
                        <form action="/forum/{{ $tanya->id }}/delete" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure ?')" class="btn text-muted" style="background-color: transparent; border-color: transparent; width: relative; height: 20px; font-size: 12px; margin-right: 1rem; padding-bottom: 0rem; padding-top: 0rem; padding-left: 0rem; padding-right: 0rem; border-radius: 0.4rem;">
                                Delete
                            </button>
                        </form>
                    @endif
                    <!-- DELETE -->
                    
                </div>

                <p class="text-muted" style="font-size: smaller;"> {{ $tanya->created_at->diffForHumans() }} </p>
                <h6> {{ $tanya->body }}</h6>

                <div class="row">

                    <div class="col">
                        <!-- COMMENTS BUTTON -->
                        <div class="text-muted small text-center align-self-center">
                            <button 
                                class="btn" type="button" data-toggle="collapse" data-target=".comment{{ $tanya->id }}" aria-expanded="false" aria-controls="comments{{ $tanya->id }}"
                                style="background-color: transparent; margin-left: 41rem; font-size: 12px;">
                                <i class="bi bi-chat-left mr-1"></i>
                                {{ $tanya->comments_count }}
                            </button>
                        </div>
                        <!-- COMMENTS BUTTON -->
                    </div>
                </div>

                <!-- COMMENTS -->
                <div class="collapse comment{{ $tanya->id }}" id="comments{{ $tanya->id }}">

                    <!-- COMMENT INPUT -->
                    <div class="card-footer py-3 border-0" style="background-color: #FFFFFF;">
                        <span style="font-weight: 500;">Comments</span>
                        <!-- FORM  -->
                        <form method="POST" action="/forum/comments">
                            @csrf
                            <div class="d-flex flex-start w-100">
                                <div class="form-outline w-100">
                                    <textarea class="form-control" id="textAreaExample" name="body" rows="3" style="background: #fff; font-size: 12px;"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" class="form-control" value="{{ Auth::id() }}">
                            <input type="hidden" name="pertanyaan_id" class="form-control" value="{{ $tanya->id }}">
                            <div class="float-end mt-2 pt-1">
                                <button type="submit" class="btn btn-primary btn-sm" style="background-color: #7074E8; border-color: transparent; color: #fff; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.2rem; padding-top: .2rem; padding-left: .5rem; padding-right: .5rem; border-radius: 0.4rem;">
                                    Post comment
                                </button>
                            </div>
                        </form>
                        <!-- FORM  -->
                    </div>
                    
                    <!-- COMMENT INPUT -->

                    <!-- PPL COMMENTS -->
                    @foreach($tanya->comments as $comment)
                        <div class="card-body" style="padding-top: 0; padding-bottom: 0;">
                            <hr>
                                <!-- EDIT FORM -->
                                <div class="row">
                                    <div class="col">
                                        <p style="margin-bottom: 0; font-weight: 600;">{{ $comment->user->name }}</p>
                                    </div>

                                    @if(Auth::id() == $comment->user->id)
                                    <!-- EDIT -->
                                    <button type="edit" id="editComUser" class="btn text-muted" style="background-color: transparent; border-color: transparent; width: relative; height: 20px; font-size: 12px; margin-right: 2rem; padding-bottom: 0rem; padding-top: 0rem; padding-left: 0rem; padding-right: 0rem; border-radius: 0.4rem;"
                                        data-toggle="collapse" data-target=".editCom{{ $comment->id }}" aria-expanded="false" aria-controls="commentEdit{{ $comment->id }}" onclick="myFunction()">
                                        Edit
                                    </button>
                                    <!-- EDIT -->

                                    <!-- DELETE -->
                                        <form action="/forum/comments/{{ $comment->id }}/delete" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Are you sure ?')" style="background-color: transparent; border-color: transparent; width: relative; height: 20px; font-size: 12px; margin-right: 1rem; padding-bottom: 0rem; padding-top: 0rem; padding-left: 0rem; padding-right: 0rem; border-radius: 0.4rem;">
                                                Delete
                                            </button>
                                        </form>
                                    <!-- DELETE -->
                                    @endif
                                </div>

                                <p class="text-muted" style="font-size: smaller;">{{ $comment->created_at->diffForHumans() }}</p>

                                <div id="commentBody">
                                    <p>{{ $comment->body }}</p>
                                </div>

                                <!-- EDIT FORM -->
                                <div class="collapse editCom{{ $comment->id }}" id="commentEdit{{ $comment->id }}">

                                    <form action="/forum/comments/{{ $comment->id }}/edit" method="post">
                                        @method('put')
                                        @csrf
                                        <div class="d-flex w-100">
                                            <div class="form-outline w-100">
                                                <textarea class="form-control" id="textAreaExample" name="body" rows="8" style="background: #fff; font-size: 12px;">{{ $comment->body }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Save Button -->
                                        <div class="float-end mt-2 pt-1">
                                            <button type="submit" class="btn btn-primary btn-sm" style="background-color: #7074E8; border-color: transparent; color: #fff; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.2rem; padding-top: .2rem; padding-left: .5rem; padding-right: .5rem; border-radius: 0.4rem;">
                                                Save comment
                                            </button>
                                        </div>
                                        <!-- Save Button -->
                                    </form>
                                </div>
                                <!-- EDIT FORM -->
                        </div>
                    @endforeach
                    <!-- PPL COMMENTS -->
                </div>
                <!-- COMMENTS -->
            </div>
        @endforeach
        
        <!-- QUESTIONS -->
    </div>
    <!-- FORUM -->
    
    <!-- COMMENT HIDE -->

    <!-- COMMENT HIDE -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/scripthide.js"> </script>
</body>
</html>