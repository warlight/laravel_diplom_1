@extends('layouts.admin')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1>Заказы</h1>
			<table class="table">
				<tbody>
				<tr>
					<th>
						#
					</th>
					<th>
						Имя
					</th>
					<th>
						Телефон
					</th>
					<th>
						Когда отправлен
					</th>
					<th>
						Сумма
					</th>
					<th>
						Действия
					</th>
				</tr>
				@foreach($orders as $order)
					<tr>
						<td>{{ $order->id }}</td>
						<td>{{ $order->name }}</td>
						<td>{{ $order->phone }}</td>
						<td>{{ $order->updated_at->format('Y.m.d H:i:s') }}</td>
						<td>{{ $order->fullPriceText() }}</td>
						<td>
							<div class="btn-group" role="group">
								<a class="btn btn-success" type="button" href="{{ route('admin.orders.show', $order) }}">Открыть</a>
							</div>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection