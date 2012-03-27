Ext.define('Hosting.view.ftp_group.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.ftpgrouplist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    height: 415,
    title: 'Lista de Servidores ',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listagrupos',
            xtype: 'grid',
            border: false,
            store: 'FtpGroups',
            columns : [{
                header: 'Nombre',
                dataIndex: 'groupname',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:100
            },{
                header: 'Descripcion',
                dataIndex: 'description',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 390
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('FtpGroups'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} servidores de  {2}',
                emptyMsg: "No hay servidores registradas"
            })
        }];
        
        this.tbar =[{
            title: 'Acciones',
            xtype: 'buttongroup',
            columns: 3,
            items:[{
                xtype: 'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'addserver',
                    iconAlign: 'top',
                    iconCls: 'icon-add-server'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large',
                    iconAlign: 'top'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-server',
                    action: 'editserver',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-server',
                    action:'deleteserver',
                    disabled:true
                }]
            }]
        },{
            title: 'Reportes',
            xtype: 'buttongroup',
            columns: 4,
            defaults:{
                scale: 'large',
                iconAlign: 'top'
            },
            items:[{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large',
                    iconAlign: 'top'
                },
                items:[{
                    text: 'Informacion',
                    iconCls: 'icon-information-server',
                    action:'infoserver',
                    disabled:true
                },{
                    text: 'Estadisticas',
                    iconCls: 'icon-statistics-server',
                    action:'statisticsserver',
                    disabled:true
                },{
                    text: 'Visor de eventos',
                    iconCls:'icon-diagnosis-server',
                    action:'eventviewerserver',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editserver]');
        var bdelete = this.down('button[action=deleteserver]');
        var bdinfo = this.down('button[action=infoserver]');
        var bdviewer = this.down('button[action=eventviewerserver]');
        var bdstatistic = this.down('button[action=statisticsserver]');
        if(selected.length > 0){
            bdelete.enable();
            bdstatistic.enable();
            if(selected.length == 1){
                bedit.enable();
                bdinfo.enable();
                bdviewer.enable()
            }else{
                bedit.disable();
                bdinfo.disable();
                bdviewer.disable()
            }
        }else{
            bedit.disable();
            bdelete.disable();
            bdinfo.disable();
            bdviewer.disable();
            bdstatistic.disable();
        }
    }

});