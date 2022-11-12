@extends('layouts.master')

@section('content')
                    <div class="container-fluid">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-primary">
                                      <div class="inner">
                                        <h3>{{$benefice ?? ''}}</h3>
                                        <p>
                                        Bénéfice Total 
 
                                        </p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion ion-bag"></i>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h3>{{$nombreInscriptions ?? count($inscriptions)}}</h3>
                                        <p>
                                        Nombre Inscriptions 
                                        </p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion ion-bag"></i>
                                      </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                   <div class="card mb-4">
                        <form method="post" action="{{route('rapport.filter')}}">                                                    
                            @csrf
                            <div class="row">
                                <div class="col-md-4" >
                                    <label class="control-label">{{ trans('main.debut') }}: </label>
                                    <input class="form-control" value="{{$date_debut ?? ''}}" name="date_debut" type="date" />
                                </div>

                                <div class="col-md-4" >
                                    <label class="control-label">{{ trans('main.fin') }}: </label>
                                    <input class="form-control" value="{{$date_fin ?? ''}}" name="date_fin" type="date" />
                                </div>

                                <div class="col-md-4" style="padding:16px;">
                                    <button type="submit" class="row btn bubbly-button" >
                                        {{ trans('main.Filtrer') }}
                                    </button>                                                                                                        
                                </div>
                            </div>
                        </form>
                    </div>
                    <table id="example1"  class="table table-striped table-bordered no-wrap text-dark">
                                        <thead>
                                            <tr class="text-white">
                                                <th>{{ trans('main.Membre') }}</th>
                                                <th>{{ trans('main.debut') }}</th>
                                                <th>{{ trans('main.fin') }}</th>
                                                <th>{{ trans('main.Nombre seance reste') }} </th>
                                                <th>{{ trans('main.nbr seances') }} </th>
                                                <th>{{ trans('main.abonnement') }}</th>
                                                <th>{{ trans('main.etat') }}</th>
                                                <th>{{ trans('main.total') }}</th>
                                                <th>{{ trans('main.remise') }}</th>
                                                <th>{{ trans('main.nbrmois') }}</th>
                                                <th>{{ trans('main.versement') }}</th>
                                                <th>{{ trans('main.actions') }}</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($inscriptions as $inscription)
                                            <tr 
                                            class="
                                            @if($inscription->etat == 1)
                                            td-success
                                            @else
                                            td-error
                                            @endif"
                                            >
                                                <td>
                                                    {{$inscription->getMembre()['nom'] ?? ''}}
                                                    {{$inscription->getMembre()['prenom'] ?? ''}}
                                                </td>
                                                <td>{{$inscription->debut ?? ''}}</td>
                                                <td>{{$inscription->fin ?? ''}}</td>
                                                <td>{{$inscription->reste ?? ''}}</td>
                                                <td style="text-align:center;">{{$inscription->nbsseance ?? ''}}</td>
                                                <td>{{$inscription->getAbonnement()['label'] ?? ''}}</td>
                                                <td>
                                                    <span class="badge badge-info"> 

                                                    @if($inscription->etat == 1)
                                                        Active
                                                    @else
                                                        Non Active
                                                    @endif

                                                    </span>
                                                </td>
                                                <td>{{$inscription->total ?? ''}}DA</td>
                                                <td>{{$inscription->remise ?? ''}}</td>

                                                <td style="text-align:center;">
                                                    {{$inscription->nbrmois ?? ''}}
                                                </td>                                            
                                                <td>{{$inscription->versement ?? ''}} DA</td>

                                                <td>
                                                    <a class="btn bubbly-button text-white" href="{{route('inscription.presence',['inscription'=>$inscription->id])}}">
                                                        <i class="fa fa-list"></i>
                                                        Présences
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach                                            
                                        </tbody>
                                    </table>

                </div> 
        </div>


@endsection


@section('scripts')
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>

<script>
$(document).ready(function() {
    var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                            + momentNow.format('dddd')
                             .substring(0,3).toUpperCase());
        $('#time-part').html(momentNow.format('A hh:mm:ss'));
    }, 100);
aDatasets1 = [65,59,80,81,56,55,40,47];  
aDatasets2 = [20,30,40,50,60,20,25,47];
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Samedi", "Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi","vendredi"],
        
        datasets: [ {
              label: 'Homme',
              fill:false,
            data: aDatasets1,

            backgroundColor: '#E91E63',
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        },
        
        {
            label: 'Femme',
              fill:false,
            data: aDatasets2,
            backgroundColor: 
                '#3F51B5'
            ,
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        }
        
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
        title: {
            display: true,
            text: 'Membre par semaine'
        },
        responsive: true,
        
       tooltips: {
            callbacks: {
                labelColor: function(tooltipItem, chart) {
                    return {
                        borderColor: 'rgb(255, 0, 20)',
                        backgroundColor: 'rgb(255,20, 0)'
                    }
                }
            }
        },
        legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'red',
               
            }
        }
    }
});

});



</script>

@endsection