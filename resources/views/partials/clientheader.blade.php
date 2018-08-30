<div class="col-md-6">

    <h1 class="moveup">
      {{$client->name}} ({{$client->position != "" ?$client->position .", " :""}}{{$client->company_name}})
      @if(Entrust::can('client-update'))
        <a href="{{ route('clients.edit', $client->id) }}" style="font-size: 2rem;"><i class="glyphicon glyphicon-pencil"></i></a>
      @endif
    </h1>

    <!--Client info leftside-->
    <div class="contactleft">
        @if($client->email != "")
                <!--MAIL-->
        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('mail') }}" data-placement="left"> </span>
            <a href="mailto:{{$client->email}}" data-toggle="tooltip" data-placement="left">{{$client->email}}</a></p>
        @endif
        @if($client->primary_number != "")
                <!--Work Phone-->
        <p><span class="glyphicon glyphicon-headphones" aria-hidden="true" data-toggle="tooltip"
                 title=" {{ __('Primary number') }} " data-placement="left"> </span>
            <a href="tel:{{$client->primary_number}}">{{$client->primary_number}}</a></p>
        @endif
        @if($client->secondary_number != "")
                <!--Secondary Phone-->
        <p><span class="glyphicon glyphicon-phone" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Secondary number') }}" data-placement="left"> </span>
            <a href="tel:{{$client->secondary_number}}">{{$client->secondary_number}}</a></p>
        @endif
        @if($client->additional_number != "")
          <!--Additional Phones-->
            <p><span class="glyphicon glyphicon-phone" aria-hidden="true" data-toggle="tooltip"
                     title="{{ __('Additional number') }}" data-placement="left"> </span>
              <a href="tel:{{$client->additional_number}}">{{$client->additional_number}}</a></p>
        @endif
        @if($client->address || $client->zipcode || $client->city != "")
                <!--Address-->
        <p><span class="glyphicon glyphicon-home" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Full address') }}" data-placement="left"> </span> {{$client->address}}
            <br/>{{$client->zipcode}} {{$client->city}}
        </p>
        @endif
        @if($client->latitude != "" && $client->longitude != "")
          <!--Google Map-->
            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true" data-toggle="tooltip"
                     title="{{ __('Google Map') }}" data-placement="left"> </span>
              <a href="{{'https://www.google.com/maps/@' . $client->latitude}},{{$client->longitude}},15z" target="_blank">{{ __('Google Map') }}</a></p>
          @endif
    </div>

    <!--Client info leftside END-->
    <!--Client info rightside-->
    <div class="contactright">
        @if($client->company_name != "")
                <!--Company-->
        <p><span class="glyphicon glyphicon-star" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Company') }}" data-placement="left"> </span> {{$client->company_name}}</p>
        @endif
        @if($client->vat != "")
                <!--Company-->
        <p><span class="glyphicon glyphicon-cloud" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('vat') }}" data-placement="left"> </span> {{$client->vat}}</p>
        @endif
        @if($client->industry != "")
                <!--Industry-->
        <p><span class="glyphicon glyphicon-briefcase" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Industry') }}"data-placement="left"> </span> {{$client->industry}}</p>
        @endif
        @if($client->company_type!= "")
                <!--Company Type-->
        <p><span class="glyphicon glyphicon-globe" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Company type') }}" data-placement="left"> </span>
            {{$client->company_type}}</p>
        @endif
        @if($client->office_number != "")
          <!--Office Phones-->
            <p><span class="glyphicon glyphicon-phone" aria-hidden="true" data-toggle="tooltip"
                     title="{{ __('Office number') }}" data-placement="left"> </span>
              <a href="tel:{{$client->office_number}}">{{$client->office_number}}</a></p>
        @endif
        @if($client->website != "")
          <!--Website-->
            <p><span class="glyphicon glyphicon-cloud" aria-hidden="true" data-toggle="tooltip"
                     title="{{ __('website') }}" data-placement="left"> </span>
              <a href="{{(empty(parse_url($client->website)['scheme'])? 'http://' : '') . $client->website}}" target="_blank">{{$client->website}}</a></p>
        @endif
    </div>
</div>

<!--Client info rightside END-->
