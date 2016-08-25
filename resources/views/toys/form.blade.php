	<table class="table">
		<thead>
			<tr class="row">
				<th class="col-sm-3">Item</th>
				<th class="col-sm-2">Periode</th>
				<th class="col-sm-1">Qty</th>
				<th class="col-sm-2">Harga</th>
				<th class="col-sm-2">Diskon</th>
				<th class="col-sm-2">Subtotal</th>
			</tr>
		</thead>
		<tbody>
			@foreach(range(0,2) as $key)
				<tr class="row">
					<td class="col-sm-3">
						<div class="form-group">
							<select class="form-control" name="item[{{$key}}][product_id]">
								<option value="1">Topzy Tumblers Twirlin' Tumblin' Fun Park</option>
								<option value="2">Geometric Stacker</option>
								<option value="3">Backyard Barbeque™</option>
								<option value="4">Wooden Sorting Box</option>
								<option value="5">Mega Apatosaurus</option>
								<option value="6">Step and Count Kangaroo</option>
							</select>
						</div>
					</td>
					<td class="col-sm-2">
						<div class="form-group">
							<select class="form-control" name="period[{{$key}}]">
								<option value="1">3 Hari</option>
								<option value="2">1 Minggu</option>
								<option value="3">2 Minggu</option>
							</select>
						</div>
						<input type="hidden" name="item[{{$key}}][id]" value="" class="form-control" placeholder="Qty">
					</td>
					<td class="col-sm-1">
						<div class="form-group">
							<input type="number" name="item[{{$key}}][quantity]" class="form-control" placeholder="Qty">
						</div>
					</td>
					<td class="col-sm-2">
						<div class="form-group">
							<input type="text" name="item[{{$key}}][price]" class="form-control" placeholder="Enter price">
						</div>
					</td>
					<td class="col-sm-2">
						<div class="form-group">
							<input type="text" name="item[{{$key}}][discount]" class="form-control" placeholder="Enter discount">
						</div>
					</td>
					<td class="col-sm-2">
						<div class="form-group">
							<input type="text" name="subtotal[{{$key}}]" class="form-control" placeholder="Enter subtotal">
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>