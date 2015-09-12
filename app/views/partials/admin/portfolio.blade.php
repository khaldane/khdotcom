<div class="form-group">
    <label for="featuredImg" class="col-sm-2 control-label">Featured Image:</label>
    <div class="col-sm-10">
        {{ Form::file('featuredImg') }}
    </div>
</div>
<div class="form-group">
    <label for="companyName" class="col-sm-2 control-label">Company:</label>
    <div class="col-sm-10">
    {{ Form::text('companyName', isset($caseStudy->companyName) ? $caseStudy->companyName : '') }}
    </div>
</div>
<div class="form-group">
    <label for="type" class="col-sm-2 control-label">Type:</label>
    <div class="col-sm-10">
        {{ Form::select('type', array('Mobile' => 'Mobile', 'Web' => 'Web')) }}
    </div>
</div>
<div class="form-group">
    <label for="languages" class="col-sm-2 control-label">Languages:</label>
    <div class="col-sm-10">
        {{ Form::text('languages', isset($caseStudy->languages) ? $caseStudy->languages : '',  array('placeholder' => 'Seperate with comma')) }}
    </div>
</div>
<div class="form-group">
    <label for="frameworks" class="col-sm-2 control-label">Frameworks:</label>
    <div class="col-sm-10">
        {{ Form::text('frameworks', isset($caseStudy->frameworks) ? $caseStudy->frameworks : '',  array('placeholder' => 'Seperate with comma')) }}
    </div>
</div>
<div class="form-group">
    <label for="features" class="col-sm-2 control-label">Features:</label>
    <div class="col-sm-10">
        {{ Form::text('features', isset($caseStudy->features) ? $caseStudy->features : '',  array('placeholder' => 'Seperate with comma')) }}
    </div>
</div>
<div class="form-group">
    <label for="tools" class="col-sm-2 control-label">Tools:</label>
    <div class="col-sm-10">
        {{ Form::text('tools', isset($caseStudy->tools) ? $caseStudy->tools : '',  array('placeholder' => 'Seperate with comma')) }}
    </div>
</div>
<div class="form-group">
    <label for="website" class="col-sm-2 control-label">Website:</label>
    <div class="col-sm-10">
        {{ Form::text('website', isset($caseStudy->website) ? $caseStudy->website : '') }}
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-sm-2 control-label">Tag:</label>
    <div class="col-sm-10">
        {{ Form::text('tag', isset($caseStudy->tag) ? $caseStudy->tag : '') }}
    </div>
</div>
<div class="form-group">
    <label for="mainImg" class="col-sm-2 control-label">Main Image:</label>
    <div class="col-sm-10">
        {{ Form::file('mainImg') }}
    </div>
</div>
<div class="form-group">
    <label for="shortdesc" class="col-sm-2 control-label">Short Description:</label>
    <div class="col-sm-10">
        {{ Form::text('shortDescription', isset($caseStudy->shortDescription) ? $caseStudy->shortDescription : '') }}
    </div>
</div>
<div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description:</label>
    <div class="col-sm-10">
        <textarea name="editor1" id="description" rows="10" cols="80">
            @if(isset($caseStudy->description))
                {{ $caseStudy->description }}
            @endif
        </textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
    </div>
</div>
<div class="form-group">
    <label for="secondaryImg" class="col-sm-2 control-label">Secondary Image:</label>
    <div class="col-sm-10">
        {{ Form::file('secondaryImg') }}
    </div>
</div>
<div class="form-group">
    <label for="secondaryDescription" class="col-sm-2 control-label">Secondary Description:</label>
    <div class="col-sm-10">
        {{ Form::text('secondaryDescription', isset($caseStudy->secondaryDescription) ? $caseStudy->secondaryDescription : '') }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>