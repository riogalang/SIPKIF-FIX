@extends('layouts.applogin')

@section('content-dash')
<div id="overview">
	<!-- Breadcrumbs-->


	<!-- Icon Cards-->
	<div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Diagram Batang <br>
                  <p>Laporan kerusakan infrastruktur dalam bentuk tabel batang</p>
                </div>

                <div class="panel-body">
                    {!! $chart->html() !!}
                </div>
            </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>

          

        </div>
        <!-- /.container-fluid -->

        

      </div>
      <!-- /.content-wrapper -->

    </div>
    {!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection
