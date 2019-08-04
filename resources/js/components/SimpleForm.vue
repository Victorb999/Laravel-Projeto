
<template>
	<div class="container">
    <div class="form-group row">
            <label for="Nome" >Nome</label>                                
            <input id="nome" type="text" class="form-control" name="nome"  autocomplete="nome" autofocus
            v-validate.continues="'required|alpha|min:5'"/>
            
                <span class="badge badge-danger">{{ errors.first('nome') }}</span>
            
    </div>
    
    <div class="form-group row">
            <label for="email" >Email</label>                                
            <input id="email" type="email" class="form-control" name="email"  required autocomplete="nome" autofocus
            v-validate.continues="'required|email'"/>
            <span class="badge badge-danger">{{ errors.first('email') }}</span>
    </div>       
    <div class="form-group row">
            <label for="celular">Telefone celular*</label>                                
            <input id="celular" type="text" class="form-control" name="celular"  required autocomplete="celular" autofocus
             v-validate.continues="'required|numeric|min:8'"/>
            <span class="badge badge-danger">{{ errors.first('celular') }}</span>
    </div>   
    </div>    
</template>