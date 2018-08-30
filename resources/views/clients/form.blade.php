<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
        {!!
            Form::text('name',
            isset($data['owners']) ? $data['owners'][0]['name'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('position', 'Position:', ['class' => 'control-label']) !!}
        {!!
            Form::text('position',
            isset($data['owners']) ? $data['owners'][0]['position'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-3 removeleft">
        {!! Form::label('vat', 'Vat:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('vat',
            isset($data['vat']) ?$data['vat'] : null,
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('company_name', 'Company name:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('company_name',
            isset($data['name']) ? $data['name'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-3 removeleft removeright">
        {!! Form::label('Staff Size', 'Staff Size:', ['class' => 'control-label']) !!}
        {!!
            Form::number('total_staffs',
            isset($data['total_staffs']) ?$data['total_staffs'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-3 removeleft">
        {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
        {!!
            Form::email('email',
            isset($data['email']) ? $data['email'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('website', 'Website:', ['class' => 'control-label']) !!}
        {!!
            Form::text('website',
            isset($data['website']) ? $data['website'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-3 removeleft removeright">
        {!! Form::label('office_number', 'Office Number:', ['class' => 'control-label']) !!}
        {!!
            Form::text('office_number',
            isset($data['office_number']) ? $data['office_number'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
    {!! 
        Form::text('address',
        isset($data['address']) ? $data['address'] : null, 
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-inline">
    <div class="form-group col-sm-3 removeleft">
        {!! Form::label('zipcode', 'Zipcode:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('zipcode',
             isset($data['zipcode']) ? $data['zipcode'] : null, 
             ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-3 removeleft">
        {!! Form::label('city', 'City:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('city',
            isset($data['city']) ? $data['city'] : null,
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-3 removeleft">
        {!! Form::label('latitude', 'Latitude:', ['class' => 'control-label']) !!}
        {!!
            Form::text('latitude',
            isset($data['latitude']) ? $data['latitude'] : null,
            ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-3 removeleft removeright">
        {!! Form::label('longitude', 'Longitude:', ['class' => 'control-label']) !!}
        {!!
            Form::text('longitude',
            isset($data['longitude']) ? $data['longitude'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-3 removeleft">
        {!! Form::label('primary_number', 'Primary Number:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('primary_number',  
            isset($data['phone']) ? $data['phone'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-3 removeleft">
        {!! Form::label('secondary_number', 'Secondary Number:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('secondary_number',  
            null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('additional_number', 'Secondary Number:', ['class' => 'control-label']) !!}
        {!!
            Form::text('additional_number',
            null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>
<div class="form-group">

    {!! Form::label('company_type', 'Company type:', ['class' => 'control-label']) !!}
    {!!
        Form::text('company_type',
        isset($data['companydesc']) ? $data['companydesc'] : null,
        ['class' => 'form-control'])
    !!}
</div>
<div class="form-group">
    {!! Form::label('industry', 'Industry:', ['class' => 'control-label']) !!}
    {!!
        Form::select('industry_id',
        $industries,
        null,
        ['class' => 'form-control ui search selection top right pointing search-select',
        'id' => 'search-select'])
    !!}
</div>
<div class="form-group">
    {!! Form::label('remark', 'Remark:', ['class' => 'control-label']) !!}
    {!!
        Form::textarea('remark',
        null,
        ['class' => 'form-control'])
    !!}
</div>


<div class="form-group">
    {!! Form::label('user_id', 'Assign user:', ['class' => 'control-label']) !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select']) !!}

</div>


{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}