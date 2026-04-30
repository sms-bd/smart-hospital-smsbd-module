# Smart Hospital SMS Gateway | SMS.BD Integration

A lightweight, developer-friendly integration for the **Smart Hospital Management System**.  
This module replaces the default custom SMS library to enable native support for the **SMS.BD API in Bangladesh**.


## Technical Overview

- **Target System:** [Smart Hospital - CodeCanyon v23205038](https://codecanyon.net/item/smart-hospital-hospital-management-system/23205038) 
- **File Need to Change:** `application/libraries/Customsms.php`  

## Installation

### 1. API Credentials

1. Register at [**SMS.BD**](https://sms.bd/signup/)
2. Retrieve your [**API KEY**](https://portal.sms.net.bd/api) from the Portal


### 2. File Replacement

The Smart Hospital script uses a dedicated library for custom gateways.  
You do **not** need to create new files.

1. Open the file: `application/libraries/Customsms.php`
2. Replace the entire class content with the **SMS.BD integration code**
3. Inside the class, make sure to add your credentials at the top:

```php
var $api_key = "YOUR_SMS_BD_API_KEY";
var $sender_id = ""; // optional (add after getting approved sender ID from sms.bd)
```

## Configuration

Activate the gateway via the Admin Panel:

- **Path:** `Dashboard → Setup → Settings → SMS Settings`
- **Gateway:** Select **Custom SMS Gateway**
- **Name:** `Alpha SMS`
- **Status:** **Enabled**

Click **Save Changes**


## Supported Events

This module triggers notifications for the following core system events:

### 🏥 Patient Care
- Registration (OPD/IPD)
- Discharge

### 📅 Scheduling
- Appointment Approvals

### 🔐 Security
- Login Credential Delivery

### 💻 Telehealth
- Live Meetings
- Consultations


## 🇧🇩 Bangladesh Specific Features

- Supports **Masking/Branded/Sender ID** and **Non-Masking/Regular**
- Optimized for high delivery rates across all local operators:
- Grameenphone (GP)
- Robi
- Banglalink (BL)
- Teletalk
- Supports:
- English messages
- Unicode (Bangla) messages


## Notes

- Ensure your SMS.BD account is active before integration
- Verify sender ID approval for masking/branded SMS (Optional)
- Test with both English and Bangla messages after setup

