<!--div id="content" class="ap_content row text-center" ng-controller="login">
	<form class="" action="{url_login}" name="exampleForm">
		<div class="form-group col-md-12">
			<input id="name" type="text" class="form-control" placeholder="name" ng-model="formData.name" required>
		</div>

		<div class="form-group col-md-12">
			<input id="clave" type	="password" class="form-control" placeholder="Clave" ng-model="formData.pass" required>
		</div>
		
		<div class="col-md-12">
			<input type="submit" class="btn btn-success" ng-click="submitForm(formData)" />
			<input type="submit" class="btn btn-default" ng-click="save()" value="jajajajaja" />
		</div>
	</form-->
<div id="container" class="ap_content row text-center" ng-controller="NewUserController">
<!-- form action="{form_identificar}" method="POST" name="userForm" class="form-horizontal" novalidate-->
{form_identificar}
	<div class="form-group" >
		<div class="col-md-3"></div>
		<div class="input-group col-md-6" ng-class="{ 'has-error': userForm.name.$invalid && userForm.name.$touched }">
			<div class="input-group-addon"><span class="glyphicon glyphicon-user" ></span></div>
			<input type="text" class="form-control" name="name" ng-model="user.name" placeholder="Username" required>
			<div class="input-group-addon" ng-show="userForm.name.$invalid && userForm.name.$touched"><span class="glyphicon glyphicon-asterisk"></span></div>	
		</div>
		<div class="col-md-3"></div>
	</div>


	<div class="form-group">
		<div class="col-md-3"></div>
		<div class="input-group col-md-6" ng-class="{ 'has-error': userForm.password.$invalid && userForm.password.$touched }" >
			<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" ></span></span>
			<input type="password" class="form-control" name="password" ng-model="user.password" placeholder="Password" required>
			<span class="input-group-addon" ng-show="userForm.password.$invalid && userForm.password.$touched"><span class="glyphicon glyphicon-asterisk" ></span></span>
		</div>
		<div class="col-md-3"></div>
	</div>
	<button class="btn btn-primary" ng-click="save()">Iniciar Sesion</button>
	
	<div class="form-gorup text-center">
		<div class="col-md-3 col-xs-offset-3">
		<?php if ($calendario_g != ''){ ?>
		{calendario_g}
		<?php } ?>
		</div>
	</div>
	
</form>
</div>