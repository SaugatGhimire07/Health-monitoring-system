@include('nav')
<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<h3 class="title">Analytics</h3>
			<div class="table100 ver1 m-b-110">
				<div class="table100-head">
					<table>
						<thead>
							<tr class="row100 head">
								<th class="cell100 column1">Temperature</th>
								<th class="cell100 column2">Fall Detection</th>
								<th class="cell100 column3">Heart beat</th>
								<th class="cell100 column4">Humitidy</th>
								<th class="cell100 column5">ECG</th>
							</tr>
						</thead>
					</table>
				</div>

				<div class="table100-body js-pscroll">
					<table>
						<tbody>
                        @foreach($alldata as $i)
							<tr class="row100 body">
								<td class="cell100 column1">
                                    {{$i->temperature}} °C
                                </td>
								<td class="cell100 column2">
                                    {{$i->fall_detection}}
                                </td>
								<td class="cell100 column3">
                                    {{$i->heartbeat}} BPM
                                </td>
								<td class="cell100 column4">
                                    {{$i->humidity}} %
                                </td>
								<td class="cell100 column5">
                                    {{$i->ecg_readings}}
                                </td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
  		</div>
	</div>
</div>