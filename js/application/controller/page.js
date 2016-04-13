if(App.namespace){App.namespace('Controller.Page', function(App){
    /**
     * @namespace App.Controller.Page
     */
    var ctrl = {},

        node = {},

        Linker = App.Extension.Linker,
        Dom = App.Extension.Dom,

        Error = App.Action.Error;


    ctrl.construct = function(){

        App.domLoaded(build);

    };

    function build (){

        // query base HTML elements in the page
        node = App.node({
            app:             App.query('#app'),
            appContent:      App.query('#app-content')
        });



        console.log('asd');

    }





    return ctrl;

})}
