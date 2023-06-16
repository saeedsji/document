@extends('layout')
@section('title', 'صفحه اصلی')

@section('style')
@endsection


@section('content')
    <div class="container-fluid">
        @livewire('postl')
    </div>
@endsection

@section('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        window.addEventListener('alert', ({detail: {type, message}}) => {
            Toast.fire({
                icon: type,
                title: message
            })
        })
    </script>
@endsection
