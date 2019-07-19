const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const serviceProviderSchema = new Schema({
    name: String,
    logoFile: {
        fieldname: String,
        originalname: String,
        encoding: String,
        mimetype: String,
        size: Number,
        bucket: String,
        key: String,
        acl: String,
        contentType: String,
        contentDisposition: String,
        storageClass: String,
        serverSideEncryption: String,
        metadata: { fieldName: String },
        location: String,
        etag: String
    },
    description: String,
    address: {
        street: String,
        unit: String,
        city: String,
        province: String,
        postalCode: String
    },
    contact: {
        mainPhone: String,
        fax: String,
        placementPhone: String,
        placementPhoneExtension: String,
        mainEmail: String,
        placementEmail: String
    },
    perDiems: [{
        label: String,
        price: Number,
        description: String
    }],
    subscription: {
        type: String,
        subscriberSince: String,
        renewals: [{
            begin: String,
            expiry: String,
            transactionId: String
        }]
    },
    residences: [{
        _id: {type: Schema.Types.ObjectId, ref: 'residence'},
        name: String
    }],
    users: [{
        _id: {type: Schema.Types.ObjectId, ref: 'user'},
        role: String
    }]

});

const ServiceProvider = mongoose.model('serviceProvider', serviceProviderSchema);
module.exports = ServiceProvider;