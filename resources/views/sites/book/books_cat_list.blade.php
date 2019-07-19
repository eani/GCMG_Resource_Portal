
@extends('layouts.site')

    @section('title')
    GCMG DIGITAL MINISTRY - BOOK CATEGORY LIST
    @endsection

    <!-- App favicon -->
    <link rel="icon" href="{{asset('sites_assets/img/assets/favicon.png')}}" type="image/png">  
    <!-- Main CSS --> 
    <link href="{{asset('sites_assets/css/plugins.css')}}" rel="stylesheet" type="text/css" media="all"> 
    <!-- Themify Icon -->  
    <link href="{{asset('sites_assets/css/theme.css')}}" rel="stylesheet" type="text/css" media="all">  
    <!-- Simple line Icon -->
    <link href="{{asset('sites_assets/css/icon-fonts.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom CSS -->
    <link href="{{asset('sites_assets/css/custom.css')}}" rel="stylesheet" type="text/css" media="all">  
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300%7CMontserrat:400,700%7CRaleway:400,200,300' rel='stylesheet' type='text/css'> 


    <script type="text/javascript">
    if(top != self) {
        window.open(self.location.href, '_top');
    }
    </script>


    </head>
    <body>
        <!-- Start Header -->
        @include('includes.sites.header')
        <!-- End Header -->
        
@section('content')       
        <!-- Start Page Hero -->
        <section class="page-hero">
            <div class="page-hero-parallax">
                
                <div class="hero-image bg-img-13 bg-overlay">
                     
                    <div class="hero-container container pt50">  
                        <div class="hero-content text-left scroll-opacity"> 
                            <div class="section-heading">
                                <h1 class="white mb10">SEARCH THROUGH</h1>
                                <h5 class="white pl5">And broden your Horizon in the world of Classic Books</h5>  
                            </div>  
                            <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/books">Category</a></li>
                            <li class="active">Category List</li>
                        </ol>
                        </div> 
                    </div>  
                    
                </div> 
                
            </div>
        </section>
        <!-- End Page Hero -->      

        <div class="site-wrapper">    
            <!-- Clients Section -->
            
            <section class="pt100 pb80 bg-pattern-3">
                <div class="container">
                    <div class="row">  
                        
                        @if($category->books->count() >= "1")
                            <div class="col-md-12 text-center section-heading mb40">  
                                <h5>Book Resource</h5>
                                <h3 class="underline-center">List of Categorized Books</h3>
                            </div>                         
                       
                            @foreach($category->books as $books)
                                <div class="col-md-4 mb30">
                                    <a href="{{route('getCategoryMediaBook',['category'=>$category->id, 'media'=>$books->id])}}" class="a-box box-hover">
                                        <div class="box bg-white"> 
                                            <i class="icon-book-open size-4x highlight"></i>
                                            <div style="height: 50px">
                                                <h4><small>{{$books->name}}</small></h4>                                   
                                            </div>
                                            <div style="height: 100px">
                                                <h4><small>Number of Media: {{$books->booksmedia->count()}}</small></h4>
                                                <p>{{$books->description}}</p>
                                            </div>  
                                        </div>
                                    </a>
                                </div>
                            @endforeach   
                        @endif

                        @if($category->books->count() == "0")
                            <div class="col-md-12 text-center section-heading mb50">
                                <h4 class="header-title m-t-0">Sorry!!! There are no List of Categorized Books<span class="text-danger"> </span></h4>
                                <p class="text-pink font-16 m-b-10">
                                    Please Contact your Administrator to resolve this.
                                </p>
                            </div>
                        @endif             
                    </div>
                </div>
            </section>

    </body>
</html

@endsection