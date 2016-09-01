({
    extendsFrom: 'ContactsRecordView', 
    zipJSON: {},
    
    initialize: function (options) {
		this._super('initialize', [options]);		
		this.context.on('button:excfirstlast:click', this.excfirstlast, this);
    },
   
    excfirstlast: function(){
		debugger;
		var temp = this.model.get("first_name");
		this.model.set("first_name",this.model.get("last_name"));
		this.model.set("last_name",temp);
		this.model.save();
    }
})