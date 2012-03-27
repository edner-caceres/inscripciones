Ext.define('Hosting.controller.FtpGroups', {
    extend: 'Ext.app.Controller',
    stores: [
    'FtpGroups'
    ],
    models: [
    'FtpGroup'
    ],
    views: [
    'ftp_group.List',
    'ftp_group.Add'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'ftpgrouplist button[action=addserver]': {
                click: this.addFtpGroup
            },
            'ftpgrouplist button[action=editserver]': {
                click: this.editFtpGroup
            },
            'ftpgrouplist #listagrupos': {
                itemdblclick: this.editFtpGroup
            },
            'ftpgrouplist button[action=deleteserver]': {
                click: this.deleteFtpGroup
            },
            'ftpgrouplist button[action=infoserver]': {
                click: this.deleteFtpGroup
            },
            'ftpgrouplist button[action=statisticsserver]': {
                click: this.deleteFtpGroup
            },
            'ftpgrouplist button[action=eventviewerserver]': {
                click: this.deleteFtpGroup
            },
            'ftpgroupadd button[action=save]': {
                click: this.saveFtpGroup
            }
        });
    },
    addFtpGroup: function(button){
        Ext.widget('ftpgroupadd');

    },
    viewFtpGroup:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editFtpGroup: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listagrupos').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('ftpgroupadd');
        view.down('form').loadRecord(record);

    },
    deleteFtpGroup: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Servidores',
            'Esta seguro que desea eliminar los sercvidores seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listagrupos').getSelectionModel().getSelection();
                    this.getFtpGroupsStore().remove(seleccion);
                    this.getFtpGroupsStore().sync();
                }
            },
            this
        );
    },
    saveFtpGroup: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getFtpGroupModel().create();
            record.set(values);
            this.getFtpGroupsStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getFtpGroupsStore().sync();


    }

});