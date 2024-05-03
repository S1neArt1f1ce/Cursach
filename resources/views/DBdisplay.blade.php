    @extends('layout.layout')
    @section('content')
        

        <div class="container">
            <h1 class="">MultiverseMarket</h1>
        </div>

        <div class="container my-custom-table">

            @foreach ($data as $user)
                <div class="row">
                    <div class="col-md p-1">
                        <div class="p-3 border bg-light">{{ $user->name }}</div>
                    </div>
                    <div class="col-md p-1">
                        <div class="p-3 border bg-light">{{ $user->email }}</div>
                    </div>
                    <div class="col-md p-1">
                        <div class="p-3 border bg-light">{{ $user->status }}</div>
                    </div>
                    <form class="col-md p-1 m-0 d-flex" action="" method="post">
                        <button type="button" class="btn btn-danger col" data-bs-toggle="modal"
                            data-bs-target="#DeleteUser">Удалить пользователя</button>
                    </form>
                </div>
            @endforeach

            <div class="row ">
                <!-- <button type="button" class="btn btn-danger col" data-bs-toggle="modal" data-bs-target="#DeleteUser">Delete</button> -->
                <button type="button" class="btn btn-success col m-1">Добавить пользователя</button>
                <button type="button" class="btn btn-primary col m-1" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Запустите демо модального окна
                </button>
            </div>
        </div>

        <!-- Модальное окно -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Заголовок модального окна</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Сохранить изменения</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete User modal window -->
        <div class="modal fade" id="DeleteUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Удалить пользователя?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        В разработке
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                        <button type="button" class="btn btn-primary">Подтвердить</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
