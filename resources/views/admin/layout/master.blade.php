<!DOCTYPE html>

<html
    lang="{{ app()->getLocale() }}"
    class="light-style layout-navbar-fixed layout-menu-fixed"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    data-theme="theme-default"
    data-assets-path="../../backend/assets/"
    data-template="vertical-menu-template-starter">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon/favicon.ico')}}" />

    <!-- FilePond For Image -->
{{--    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />--}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fonts/tabler-icons.css')}}" />
{{--    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}" />--}}
{{--     <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icons.css')}}" />--}}

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}" />

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/rateyo/rateyo.css')}}">

    <link rel="stylesheet" href="{{ asset('backend/assets/richtexteditor/rte_theme_default.css') }}" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/quill/typography.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/quill/katex.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/quill/editor.css')}}" />

    <!-- Page CSS -->
    @if( app()->getLocale() == 'ar' )
        <link rel="stylesheet" href="{{asset('backend/assets/css/rtl.css')}}" />

    @endif


    <!-- Datatable -->

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" />




    <!-- Helpers -->
    <script src="{{asset('backend/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
{{--    <script src="{{asset('backend/assets/vendor/js/template-customizer.js')}}"></script>--}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('backend/assets/js/config.js')}}"></script>


</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        @include('admin.layout.__sidebar')
        <!-- / Menu -->


        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->
            @include('admin.layout.__navbar')
            <!-- / Navbar -->


            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @yield('content')
        </div>


                <!-- / Content -->

                <!-- Footer -->
              @include('admin.layout.__footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->





        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="{{asset('backend/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('backend/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/hammer/hammer.js')}}"></script>

<script src="{{asset('backend/assets/vendor/js/menu.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('backend/assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>

<script src="{{asset('backend/assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/quill/quill.js')}}"></script>

<script src="{{asset('backend/assets/vendor/libs/rateyo/rateyo.js')}}"></script>
<script src="{{asset('backend/assets/js/forms-selects.js')}}"></script>



<!-- Main JS -->
<script src="{{asset('backend/assets/js/main.js')}}"></script>

<!-- Data Table JS -->



<!-- Page JS -->
<script src="{{asset('backend/assets/js/pages-account-settings-account.js')}}"></script>
<script src="{{asset('backend/assets/js/extended-ui-star-ratings.js')}}"></script>
{{--<script src="{{asset('backend/assets/js/forms-editors.js')}}"></script>--}}






<!-- FilePond For Image -->

{{--<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>--}}



{{--<script>--}}
{{--    // Get a reference to the file input element--}}
{{--    const inputElement = document.querySelector('input[type="file"]');--}}

{{--    // Create a FilePond instance--}}
{{--    const pond = FilePond.create(inputElement);--}}


{{--    FilePond.setOptions({--}}
{{--        server: {--}}
{{--            headers:{--}}
{{--                'X-CSRF-TOKEN': '{{csrf_token()}}'--}}
{{--            },--}}
{{--            url : "/upload" ,--}}
{{--        },--}}

{{--        // server: {--}}
{{--        //--}}
{{--        //     process: './process',--}}
{{--        //     revert: './revert',--}}
{{--        //     // restore: './restore/',--}}
{{--        //     // load: './load/',--}}
{{--        //     // fetch: './fetch/',--}}
{{--        // },--}}


{{--    });--}}


{{--</script>--}}


{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}

{{--        $('body').on('click' , '.delete-item' , function (event){--}}
{{--            event.preventDefault();--}}

{{--            let deleteUrl = $(this).attr('href');--}}
{{--            console.log($(this))--}}


{{--            console.log("delete Url" . deleteUrl);--}}

{{--            Swal.fire({--}}
{{--                title: "Are you sure?",--}}
{{--                text: "You won't be able to revert this!",--}}
{{--                icon: "warning",--}}
{{--                showCancelButton: true,--}}
{{--                confirmButtonColor: "#3085d6",--}}
{{--                cancelButtonColor: "#d33",--}}
{{--                confirmButtonText: "Yes, delete it!"--}}
{{--            }).then((result) => {--}}
{{--                if (result.isConfirmed) {--}}

{{--                    $.ajax({--}}
{{--                        type : 'DELETE' ,--}}
{{--                        url  : deleteUrl ,--}}
{{--                        success : function(data){--}}
{{--                            console.log(data);--}}
{{--                        } ,--}}
{{--                        error : function(xhr , status , error){--}}
{{--                            console.log(error);--}}
{{--                        }--}}
{{--                    });--}}

{{--                    Swal.fire({--}}
{{--                        title: "Deleted!",--}}
{{--                        text: "Your file has been deleted.",--}}
{{--                        icon: "success"--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}

{{--        });--}}
{{--    });--}}
{{--</script>--}}



<script>
    function fireDeleteEvent(id) {
        Swal.fire({
            title: '{{trans("words.are_you_sure")}}',
            text: '{{trans("words.You-will-not-be-able-to-recover-this-file-again")}}',
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: '{{trans("words.cancel")}}',
            confirmButtonText: '{{trans('words.yes-delete')}}',
            customClass: {
                confirmButton: 'btn btn-primary me-1',
                cancelButton: 'btn btn-label-secondary'
            },
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: '{{trans("words.deleted-successfully")}}',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false

                });
                $('#form-' + id).submit();
            }
        })
    } //end fireDeleteEvent
</script>


<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error("{{$error}}")
        @endforeach
    @endif
</script>



<script type="text/javascript" src="{{ asset('backend/assets/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/assets/richtexteditor/plugins/all_plugins.js') }}"></script>

@if(app()->getLocale() == 'ar')
    <script type='text/javascript' src="{{asset('backend/assets/richtexteditor/lang/rte-lang-ar.js')}}"></script>

@endif


<script>
    // var editor1 = new RichTextEditor(".editors");

    // var editor1cfg = {}
    // editor1cfg.toolbar = "basic";
    for ($i=0 ; $i<10 ; $i++){
         new RichTextEditor('.editor' + $i);
    }

    document.addEventListener("DOMContentLoaded", () => {
        const headTextEditor = document.querySelectorAll("iframe");

        for (let i = 0; i < headTextEditor.length; i++) {
            let item = headTextEditor[i].contentWindow.document.head;

            item.innerHTML += `
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
                            `

        }

        const bodyTextEditor = document.querySelectorAll("iframe");

        for (let i = 0; i < bodyTextEditor.length; i++) {
            let item = bodyTextEditor[i].contentWindow.document.body;
            console.log(item)

            const AllSpans = item.querySelectorAll("body *");
            for (let i = 0; i < AllSpans.length; i++) {
                let itemSpan = AllSpans[i].setAttribute('style', 'font-family:Cairo !important ; direction:rtl ; font-weight:normal ; height:auto');

            }

        }

    });
</script>


@stack("scripts")
</body>
</html>
