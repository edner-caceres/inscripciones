Ext.define('Hosting.view.ftp_group.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.ftpgroupadd',
    title : 'Registrar servidor',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    requires:[
    'Ext.ux.form.MultiSelect',
    'Ext.ux.form.ItemSelector'
    ],
    iconCls: 'icon-add',
    initComponent: function() {
        this.items = [{
            xtype: 'form',
            border:false,
            bodyStyle: 'padding:10px; background-color:#DFE9F6',
            fieldDefaults: {
                labelAlign: 'top'
            },
            items: [{
                name:'id',
                xtype: 'hidden'
            },{
                xtype: 'container',
                layout:'column',
                style:{paddingBottom: '20px'},
                items:[{
                    xtype: 'container',
                    columnWidth:.35,
                    layout: 'anchor',
                    items: [{
                        xtype: 'textfield',
                        name : 'groupname',
                        fieldLabel: 'Identificador',
                        msgTarget: 'side',
                        allowBlank: false,
                        anchor:'95%'
                    }]
                },{
                    xtype: 'container',
                    columnWidth:.65,
                    layout: 'anchor',
                    items: [{
                        xtype: 'textfield',
                        name : 'description',
                        fieldLabel: 'Nombre del servidor',
                        msgTarget: 'side',
                        allowBlank: false,
                        anchor:'100%'
                    }]
                }]
            },{
                anchor: '100%',
                xtype: 'itemselector',
                buttons:['add', 'remove'],
                msgTarget: 'side',
                name : 'members',
                fieldLabel: 'Seleccione el o los usuarios que tienen habilitada(s) su(s) cuenta(s) en este servidor',
                allowBlank: false,
                store: Ext.data.StoreManager.lookup('FtpUsers'),
                displayField: 'userid',
                valueField:'id'
            }]
        }];

        this.buttons = [{
            text: 'Save',
            action: 'save',
            iconCls:'icon-guardar'
        },{
            text: 'Cancel',
            scope: this,
            handler: this.close,
            iconCls:'icon-cancelar'
        }];

        this.callParent(arguments);
    }
});