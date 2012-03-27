Ext.define('Hosting.model.FtpGroup', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'groupname',
    'members',
    'description']
});