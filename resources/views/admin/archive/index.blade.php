@extends('admin.layouts.main')

@section('content')

    <div class="row col-10">
        <div>
            <table width="100%" class="text-right position-absolute border-right-0">
                <td>
                    <table width="100%" cellpadding="2" cellspacing="1">
                        <tr>
                            <td bgcolor="#ffffff">Удобрения</td>
                        </tr>
                        <tr>
                            @foreach($products as $product)
                                <td><a href="{{ route('admin.archive.product', $product->id) }}">{{ $product->id }}</a>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <div class="text-right">
                                <td>
                                    {{ $products->links() }}
                                </td>
                            </div>
                        </tr>
                    </table>
                </td>
                <td>
                    <table width="100%" cellpadding="2" cellspacing="1">
                        <tr>
                            <td bgcolor="#ffffff">Клиенты</td>
                        </tr>
                        <tr>
                            @foreach($clients as $client)
                                <td><a href="{{ route('admin.archive.client', $client->id) }}">{{ $client->id }}</a>
                                </td>

                            @endforeach
                        </tr>
                        <tr>
                            <td>
                                {{ $clients->links() }}
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table width="100%" cellpadding="2" cellspacing="1">
                        <tr>
                            <td bgcolor="#ffffff">Культуры</td>
                        </tr>
                        <tr>
                            @foreach($cultures as $culture)
                                <td><a href="{{ route('admin.archive.culture', $culture->id) }}">{{ $culture->id }}</a>
                                </td>

                            @endforeach
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff">
                                {{ $cultures->links() }}
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table width="100%" cellpadding="2" cellspacing="1">
                        <tr>
                            <td bgcolor="#ffffff">Пользователи</td>
                        </tr>
                        <tr>
                            @foreach($users as $user)
                                <td><a href="{{ route('admin.archive.user', $user->id) }}">{{ $user->id }}</a></td>

                            @endforeach
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff">
                                {{ $users->links() }}
                            </td>
                        </tr>
                    </table>
                </td>
            </table>
        </div>
    </div>
@endsection
