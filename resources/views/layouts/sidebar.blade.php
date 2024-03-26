<style>
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #161616;
    }


    .item {
        color: #fff;
        text-align: center;
        font-weight: bold;
        padding-bottom: 30px;
    }

    .item a.sub-btn {
        display: inline-flex;
        align-items: center;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .item :hover {
        padding-top: 10px;
        padding-bottom: 10px;
        border-width: 3px;
        border-style: ridge;
        border-color: white;
        border-right: none;
        border-left: none;
    }

    .item i {
        margin-right: 10px;
        transition: 0.3s ease;
    }

    .rotate {
        transform: rotate(-180deg);
    }

    .item .sub-menu a:hover {
        border: 2px solid rebeccapurple;
        border-radius: 12px;
        padding: 5px;
    }

    .item .sub-menu a:focus {
        border: 2px solid blue;
        border-radius: 12px;
        padding: 5px;
    }
</style>

<!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



<div id="sidebarmenu" class="py-2 " style="display: none">
    <div class="w-full h-auto p-2 flex justify-center bg-gray-800" style="height:100dvh;position: sticky;top:0px;">
        <img src="{{ URL('images/logo.png') }}" class="block h-9 w-auto fill-current text-gray-800">
    </div>



    <div class="item"><a class="sub-btn"> {{ __('word.info') }} <i class="bx bx-chevrons-down dropdown"></i> </a>
        <div class="flex flex-col   sub-menu" style="display: none;">
            @include('basic.nav.navigation')
        </div>
    </div>

    <div class="item"><a class="sub-btn"> {{ __('word.financial') }} <i class="bx bx-chevrons-down dropdown"></i> </a>
        <div class="flex flex-col  sub-menu" style="display: none;">
            @include('financial.nav.navigation')
        </div>
    </div>

    
    <div class="item"><a class="sub-btn"> {{ __('word.Planning') }} <i class="bx bx-chevrons-down dropdown"></i> </a>
        <div class="flex flex-col   sub-menu" style="display: none;">
            <!--only temporarily-->
        </div>
    </div>

    <div class="item"><a class="sub-btn"> {{ __('word.users') }}<i class="bx bx-chevrons-down dropdown"></i> </a>
        <div class="flex flex-col   sub-menu" style="display: none;">
            @include('user.nav.navigation')
        </div>
    </div>

    <div class="item"><a class="sub-btn"> {{ __('word.roles') }}<i class="bx bx-chevrons-down dropdown"></i> </a>
        <div class="flex flex-col   sub-menu" style="display: none;">
            @include('role.nav.navigation')
        </div>
    </div>



    @can('tables-edit')
        <div class="item"><a href="{{ route('tables.all', 'show') }}" class="sub-btn"> {{ __('word.tables') }} </a>
        </div>
    @endcan





</div>
<script>
    $(document).ready(function() {
        $('.sub-btn').click(function() {

            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');

        });
    });
</script>
