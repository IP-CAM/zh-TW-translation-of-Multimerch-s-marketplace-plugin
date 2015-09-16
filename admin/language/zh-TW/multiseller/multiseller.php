<?php

// General
$_['ms_enabled'] = '啟用';
$_['ms_disabled'] = '停用';
$_['ms_apply'] = '同意';
$_['ms_type'] = '＊類型';
$_['ms_type_checkbox'] = '核取方塊';
$_['ms_type_date'] = '日期';
$_['ms_type_datetime'] = 'Date &amp; Time';
$_['ms_type_file'] = '檔案';
$_['ms_type_image'] = '圖片';
$_['ms_type_radio'] = 'Radio';
$_['ms_type_select'] = '選擇';
$_['ms_type_text'] = '文字';
$_['ms_type_textarea'] = '＊文字輸入區';
$_['ms_type_time'] = '時間';
$_['text_image_manager'] = '圖片管理器';
$_['text_browse'] = '瀏覽';
$_['text_clear'] = '清除';
$_['ms_store'] = '＊儲存';
$_['ms_id'] = '#';

$_['ms_error_directory'] = "警告：無法創建目錄： %s。請手動增加該目錄,並在繼續動作前使該目錄在伺服器上具有寫入權限。 <br />";
$_['ms_error_directory_notwritable'] = "警告：目錄已經存在但無法被寫入 %。請在繼續前確認該目錄是空的且在伺服器上有寫入權限。 <br />";
$_['ms_error_directory_exists'] = "警告：目錄已經存在：%s。請在繼續前確認該目錄是空的。 <br />";
$_['ms_error_product_publish'] = '商品上架失敗：賣家尚未通過審核。';
$_['ms_success_installed'] = '擴充功能已經成功安裝。';
$_['ms_success_product_status'] = '成功改變商品狀態';

$_['ms_db_upgrade'] = '<a href="%s">點選這裡</a> 將你的 MultiMerch Marketplace 資料庫更新到最新的版本。';
$_['ms_db_success'] = '你的 MultiMerch Marketplace 資料庫現在已經是最新版了！';
$_['ms_db_latest'] = '你的 MultiMerch Marketplace 資料庫已經是最新版了！';

$_['heading_title'] = '<b>[MultiMerch]</b> Digital Marketplace';
$_['text_seller_select'] = '賣家自行選擇';
$_['text_shipping_dependent'] = 'Shipping dependent';
$_['text_no_results'] = '沒有任何結果';
$_['error_permission'] = '警告：你沒有任何修改模組的權限！';

$_['ms_error_withdraw_norequests'] = 'Error: no payouts to process';
$_['ms_error_withdraw_response'] = 'Error: no response';
$_['ms_error_withdraw_status'] = 'Error: unsuccessful transaction';
$_['ms_success'] = 'Success';
$_['ms_success_transactions'] = 'Transactions successfully completed';
$_['ms_success_payment_deleted'] = 'Payment deleted';
$_['text_success']                 = '成功：你已經更改設定';

$_['ms_none'] = '無';
$_['ms_seller'] = '賣家';
$_['ms_all_sellers'] = '所有賣家';
$_['ms_amount'] = '數量';
$_['ms_product'] = '商品';
$_['ms_net_amount'] = '淨數';
$_['ms_days'] = 'days';
$_['ms_from'] = 'From';
$_['ms_to'] = 'To';
$_['ms_paypal'] = 'PayPal';
$_['ms_date_created'] = '建立日期';
$_['ms_status'] = '狀態';
$_['ms_image'] = '圖片';
$_['ms_date_modified'] = '修改日期';
$_['ms_date_paid'] = '付款日期';
$_['ms_date'] = '日期';
$_['ms_description'] = '描述';

$_['ms_commission'] = '佣金';
$_['ms_commissions_fees'] = '佣金 & 費用';
$_['ms_commission_' . MsCommission::RATE_SALE] = 'Sale fee';
$_['ms_commission_' . MsCommission::RATE_LISTING] = 'Listing fee / method';
$_['ms_commission_' . MsCommission::RATE_SIGNUP] = 'Signup fee / method';

$_['ms_commission_short_' . MsCommission::RATE_SALE] = 'S';
$_['ms_commission_short_' . MsCommission::RATE_LISTING] = 'L';
$_['ms_commission_short_' . MsCommission::RATE_SIGNUP] = 'SU';
$_['ms_commission_actual'] = 'Actual fee rates';

$_['ms_sort_order'] = 'Sort order';
$_['ms_name'] = 'Name';
$_['ms_config_width'] = '寬度';
$_['ms_config_height'] = '高度';
$_['ms_description'] = '描述';

$_['ms_enable'] = '啟用';
$_['ms_disable'] = '停用';
$_['ms_edit'] = '編輯';
$_['ms_delete'] = '刪除';

$_['ms_button_pay_masspay'] = 'Pay via MassPay';
$_['ms_button_pay_masspay_all'] = 'All Pay via MassPay';
// Menu
$_['ms_menu_multiseller'] = 'MultiMerch';
$_['ms_menu_sellers'] = '賣家';
$_['ms_menu_seller_groups'] = '賣家群組';
$_['ms_menu_attributes'] = '＊屬性';
$_['ms_menu_products'] = '商品';
$_['ms_menu_transactions'] = '交易紀錄';
$_['ms_menu_debug'] = '除錯';
$_['ms_menu_payment'] = '金流';
$_['ms_menu_addons'] = '插件';
$_['ms_menu_settings'] = '設定';

// Settings
$_['ms_settings_heading'] = '設定';
$_['ms_settings_breadcrumbs'] = '設定';
$_['ms_config_seller_validation'] = 'Seller validation';
$_['ms_config_seller_validation_note'] = 'Seller validation';
$_['ms_config_seller_validation_none'] = 'No validation';
$_['ms_config_seller_validation_activation'] = '透過電子郵件啟用';
$_['ms_config_seller_validation_approval'] = '手動批准';

$_['ms_config_product_validation'] = 'Product validation';
$_['ms_config_product_validation_note'] = 'Product validation';
$_['ms_config_product_validation_none'] = 'No validation';
$_['ms_config_product_validation_approval'] = '手動批准';

$_['ms_config_allow_inactive_seller_products'] = 'Allow inactive sellers to list products';
$_['ms_config_allow_inactive_seller_products_note'] = 'Allows inactive sellers to list new products, which will be inactive. After approval of such seller all his products will become active at once.';

$_['ms_config_disable_product_after_quantity_depleted'] = '庫存耗盡時停用商品';
$_['ms_config_disable_product_after_quantity_depleted_note'] = '商品售完後會轉為停用狀態（數量為 0 ）';

$_['ms_config_allow_relisting'] = 'Allow re-listing disabled products';
$_['ms_config_allow_relisting_note'] = 'Sellers will be able to re-list the products, which have been disabled (useful if you use product limitation by period or quantity in combination with listing fees)';

$_['ms_config_enable_banner'] = '啟用賣家橫幅圖片';
$_['ms_config_enable_banner_note'] = '允許賣家上傳一個顯示在賣家個人檔案中的橫幅圖片';

$_['ms_config_enable_one_page_seller_registration'] = '單頁面註冊(One-page registration)';
$_['ms_config_enable_one_page_seller_registration_note'] = '啟用單頁面註冊賣家(One-page registration)';

$_['ms_config_minmax_product_price'] = '商品價格限制';
$_['ms_config_minimum_product_price'] = '最小';
$_['ms_config_maximum_product_price'] = '最大';
$_['ms_config_minmax_product_price_note'] = '商品價格限制（不限制請輸入 0 ）';

$_['ms_config_allowed_image_types'] = '允許的圖片格式';
$_['ms_config_allowed_image_types_note'] = '允許上傳的圖片格式';

$_['ms_config_images_limits'] = '商品圖片限制';
$_['ms_config_images_limits_note'] = 'Minimum and maximum number of images (incl. thumbnail) required/allowed for products (0 = no limit)';

$_['ms_config_downloads_limits'] = '商品下載限制';
$_['ms_config_downloads_limits_note'] = 'Minimum and maximum number of downloads required/allowed for products (0 = no limit)';

$_['ms_config_allowed_download_types'] = '允許的檔案格式';
$_['ms_config_allowed_download_types_note'] = '允許的檔案格式';

$_['ms_config_credit_order_statuses'] = '金流狀態';
$_['ms_config_credit_order_statuses_note'] = 'Seller balance will be funded for orders with fund statuses';

$_['ms_config_debit_order_statuses'] = 'Charge statuses';
$_['ms_config_debit_order_statuses_note'] = 'Seller balance will be charged for orders with charge statuses';

$_['ms_config_display_order_statuses'] = 'Display order statuses';
$_['ms_config_display_order_statuses_note'] = 'Order statuses that aren\'t selected here will not be visible to sellers';

$_['ms_config_minimum_withdrawal'] = 'Minimum payout amount';
$_['ms_config_minimum_withdrawal_note'] = 'Minimum balance amount required to request payout';

$_['ms_config_allow_partial_withdrawal'] = 'Allow partial payouts';
$_['ms_config_allow_partial_withdrawal_note'] = 'Allow sellers to request partial payouts';

$_['ms_config_allow_withdrawal_requests'] = '允許要求支付';
$_['ms_config_allow_withdrawal_requests_note'] = '允許賣家要求獲取他們的所得';

$_['ms_config_paypal_sandbox'] = 'PayPal Sandbox mode';
$_['ms_config_paypal_sandbox_note'] = 'Use PayPal in Sandbox mode for testing and debugging';

$_['ms_config_paypal_address'] = 'PayPal address';
$_['ms_config_paypal_address_note'] = 'Your PayPal address for listing and signup fees';

$_['ms_config_notification_email'] = 'Admin email for notifications';
$_['ms_config_notification_email_note'] = 'Email address for various notification mails';

$_['ms_config_allow_free_products'] = '允許免費商品';
$_['ms_config_allow_free_products_note'] = '允許賣家上架免費商品';

$_['ms_config_allow_multiple_categories'] = '允許多種類';
$_['ms_config_allow_multiple_categories_note'] = '允許賣家將商品歸在很多類別下';

$_['ms_config_additional_category_restrictions'] = 'Bulk disallow categories';
$_['ms_config_additional_category_restrictions_note'] = '<u>Disallow</u> sellers to list products in specific categories';
$_['ms_topmost_categories'] = 'Topmost categories';
$_['ms_parent_categories'] = 'All parent categories';

$_['ms_config_restrict_categories'] = '不允許使用的類別';
$_['ms_config_restrict_categories_note'] = '<u>Disallow</u> sellers to list products in these categories';

$_['ms_config_product_included_fields'] = '為商品選擇其它包含的資訊';
$_['ms_config_product_included_fields_note'] = '所選擇的資訊將會出現在商品格式。';

$_['ms_config_provide_buyerinfo'] = 'Mail buyer information';
$_['ms_config_provide_buyerinfo_note'] = 'Include buyer address in the Product purchased email';

$_['ms_config_enable_shipping'] = 'Enable OpenCart\'s "Shippable" option';
$_['ms_config_enable_shipping_note'] = 'New products will be created with OpenCart\'s "Shippable" field enabled. With MultiMerch Shipping Addon installed, this will enable shipping functionality.';

$_['ms_config_enable_quantities'] = '啟用數量管理';
$_['ms_config_enable_quantities_note'] = '允許賣家指定商品的數量。';

$_['ms_config_seller_terms_page'] = '賣家帳戶條款';
$_['ms_config_seller_terms_page_note'] = '創立賣家帳戶前必須先同意此條款。';

$_['ms_config_allow_specials'] = '允許特價';
$_['ms_config_allow_specials_note'] = '允許賣家增加特價規則。';

$_['ms_config_allow_discounts'] = '允許大量採購優惠';
$_['ms_config_allow_discounts_note'] = '允許賣家增加大量採購時的優惠規則。';
 
$_['ms_config_withdrawal_waiting_period'] = 'Payout waiting period';
$_['ms_config_withdrawal_waiting_period_note'] = 'Seller balance entries newer than this value will not be available for payout requests';

$_['ms_config_graphical_sellermenu'] = '圖形化賣家選單';
$_['ms_config_graphical_sellermenu_note'] = '圖形化的賣家選單';

$_['ms_config_productform'] = 'Product form';
$_['ms_config_finances'] = 'Finances';
$_['ms_config_miscellaneous'] = 'Miscellaneous';

$_['ms_config_module'] = 'Modules';
$_['ms_config_status'] = '狀態';
$_['ms_config_top'] = 'Content Top';
$_['ms_config_bottom'] = 'Content Bottom';
$_['ms_config_column_left'] = 'Column Left';
$_['ms_config_column_right'] = 'Column Right';
$_['ms_config_limit'] = '限制：';
$_['ms_config_scroll'] = 'Scroll:';
$_['ms_config_image'] = 'Image (W x H):';
$_['ms_config_layout'] = 'Layout:';
$_['ms_config_position'] = 'Position:';
$_['ms_config_sort_order'] = 'Sort Order:';

$_['ms_config_enable_rte'] = '在描述中啟用 Rich Text 編輯器';
$_['ms_config_enable_rte_note'] = '在商品跟賣家的描述編輯欄位中中啟用 Summernote Rich Text 編輯器。';

$_['ms_config_rte_whitelist'] = 'Tag whitelist';
$_['ms_config_rte_whitelist_note'] = 'Permitted tags in RTE (empty = all tags permitted)';

$_['ms_config_image_sizes'] = '圖片大小';
$_['ms_config_seller_avatar_image_size'] = 'Avatar image size';
$_['ms_config_seller_avatar_image_size_seller_profile'] = '賣家個人檔案';
$_['ms_config_seller_avatar_image_size_seller_list'] = 'Seller list';
$_['ms_config_seller_avatar_image_size_product_page'] = '商品頁';
$_['ms_config_seller_avatar_image_size_seller_dashboard'] = 'Seller dashboard';
$_['ms_config_seller_banner_size'] = 'Seller banner size';

$_['ms_config_image_preview_size'] = '預覽圖片大小';
$_['ms_config_image_preview_size_seller_avatar'] = 'Seller avatar';
$_['ms_config_image_preview_size_product_image'] = '商品圖片';

$_['ms_config_product_image_size'] = '商品圖片大小';
$_['ms_config_product_image_size_seller_profile'] = '賣家個人檔案';
$_['ms_config_product_image_size_seller_products_list'] = 'Catalog products';
$_['ms_config_product_image_size_seller_products_list_account'] = 'Account products';


$_['ms_config_uploaded_image_size'] = '圖片大小限制';
$_['ms_config_uploaded_image_size_note'] = 'Define uploaded image dimension limits (W x H). Set 0 for no limits.';
$_['ms_config_max'] = 'Max.';
$_['ms_config_min'] = 'Min.';

$_['ms_config_seo'] = 'SEO';
$_['ms_config_enable_seo_urls_seller'] = 'Generate SEO URLs for new sellers';
$_['ms_config_enable_seo_urls_seller_note'] = 'This option will generate SEO-friendly URLs for new sellers. SEO URLs need to be enabled in OpenCart to use this.';
$_['ms_config_enable_seo_urls_product'] = 'Generate SEO URLs for new products (experimental)';
$_['ms_config_enable_seo_urls_product_note'] = 'This option will generate SEO-friendly URLs for new product. SEO URLs need to be enabled in OpenCart to use this. Experimental, especially for non-English stores.';
$_['ms_config_enable_update_seo_urls'] = 'Enable SEO URLs generation for updated products';
$_['ms_config_enable_update_seo_urls_note'] = 'This setting enables new SEO URLs generation, when existing products are updated.';
$_['ms_config_enable_non_alphanumeric_seo'] = 'Allow UTF8 in SEO URLs (experimental)';
$_['ms_config_enable_non_alphanumeric_seo_note'] = 'This will not strip UTF8 symbols from SEO URLs. Use at your own risk.';
$_['ms_config_sellers_slug'] = 'Sellers SEO keyword';
$_['ms_config_sellers_slug_note'] = 'Sellers list SEO keyword (will work only if SEO is enabled)';

$_['ms_config_attributes'] = 'Attributes';
$_['ms_config_attribute_display'] = 'Attribute display';
$_['ms_config_attribute_display_note'] = 'Controls the way how attributes are displayed on the product page';
$_['ms_config_attribute_display_mm'] = 'MultiMerch';
$_['ms_config_attribute_display_oc'] = 'OpenCart';
$_['ms_config_attribute_display_both'] = 'Both';

$_['ms_config_privacy'] = 'Privacy';
$_['ms_config_enable_private_messaging'] = 'Allow customers to contact sellers';
$_['ms_config_enable_private_messaging_note'] = 'Enables or disables the seller contact dialog';

$_['ms_config_hide_customer_email'] = 'Hide customer email address';
$_['ms_config_hide_customer_email_note'] = 'Hides customer email address in the seller dashboard and in orders list';
$_['ms_config_hide_email_in_email'] = 'Hide email addresses in emails';
$_['ms_config_hide_email_in_email_note'] = 'Hides customer and seller email addresses in the emails sent by MultiMerch';

$_['ms_config_seller'] = 'Sellers';

// Change Seller Nickname
$_['ms_config_seller_change_nickname'] = 'Allow nickname change';
$_['ms_config_seller_change_nickname_note'] = 'Allow sellers to change nickname/shop name';

// Seller Nickname Rules
$_['ms_config_nickname_rules'] = 'Seller nickname rules';
$_['ms_config_nickname_rules_note'] = 'Character sets allowed in seller nicknames';
$_['ms_config_nickname_rules_alnum'] = 'Alphanumeric';
$_['ms_config_nickname_rules_ext'] = 'Extended latin';
$_['ms_config_nickname_rules_utf'] = 'Full UTF-8';

// Seller Avatars
$_['ms_config_avatars_for_sellers'] = 'Avatars for sellers';
$_['ms_config_avatars_for_sellers_note'] = 'Define the way seller avatars work';
$_['ms_config_avatars_manually'] = 'Uploaded manually by seller';
$_['ms_config_avatars_both'] = 'Both uploaded by seller and pre-defined';
$_['ms_config_avatars_predefined'] = 'Only pre-defined';

$_['ms_config_other'] = 'Other';
$_['ms_config_hide_sellers_product_count'] = 'Hide count of sellers and products in the header';
$_['ms_config_hide_sellers_product_count_note'] = 'Hides line, which contains count of sellers and products in the header';

// Seller - List
$_['ms_catalog_sellers_heading'] = 'Sellers';
$_['ms_catalog_sellers_breadcrumbs'] = 'Sellers';
$_['ms_catalog_sellers_newseller'] = 'New seller';
$_['ms_catalog_sellers_create'] = 'Create new seller';

$_['ms_catalog_sellers_total_balance'] = 'Total amount on all balances: <b>%s</b> (active sellers: <b>%s</b>)';
$_['ms_catalog_sellers_email'] = 'Email';
$_['ms_catalog_sellers_total_products'] = 'Products';
$_['ms_catalog_sellers_total_sales'] = 'Sales';
$_['ms_catalog_sellers_total_earnings'] = 'Earnings';
$_['ms_catalog_sellers_current_balance'] = 'Balance (Total/Available)';
$_['ms_catalog_sellers_status'] = 'Status';
$_['ms_catalog_sellers_date_created'] = 'Date created';
$_['ms_catalog_sellers_balance_paypal'] = 'Balance payout via PayPal';

$_['ms_seller_change'] = 'Change seller';
$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'Active';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'Inactive';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'Disabled';
$_['ms_seller_status_' . MsSeller::STATUS_INCOMPLETE] = 'Incomplete';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'Deleted';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'Unpaid signup fee';

// Customer-seller form
$_['ms_catalog_sellerinfo_heading'] = 'Seller';
$_['ms_catalog_sellerinfo_seller_data'] = 'Seller data';

$_['ms_catalog_sellerinfo_customer'] = 'Customer';
$_['ms_catalog_sellerinfo_customer_data'] = 'Customer data';
$_['ms_catalog_sellerinfo_customer_new'] = 'New customer';
$_['ms_catalog_sellerinfo_customer_existing'] = 'Existing customer';
$_['ms_catalog_sellerinfo_customer_create_new'] = 'Create new customer';
$_['ms_catalog_sellerinfo_customer_firstname'] = 'First Name';
$_['ms_catalog_sellerinfo_customer_lastname'] = 'Last Name';
$_['ms_catalog_sellerinfo_customer_email'] = 'Email';
$_['ms_catalog_sellerinfo_customer_password'] = 'Password';
$_['ms_catalog_sellerinfo_customer_password_confirm'] = 'Confirm password';

$_['ms_catalog_sellerinfo_nickname'] = 'Nickname';
$_['ms_catalog_sellerinfo_keyword'] = 'SEO keyword';
$_['ms_catalog_sellerinfo_description'] = 'Description';
$_['ms_catalog_sellerinfo_company'] = 'Company';
$_['ms_catalog_sellerinfo_country'] = 'Country';
$_['ms_catalog_sellerinfo_zone'] = 'Region / State';
$_['ms_catalog_sellerinfo_zone_select'] = 'Select region/state';
$_['ms_catalog_sellerinfo_zone_not_selected'] = 'No region/state selected';
$_['ms_catalog_sellerinfo_zone_note'] = 'Select your region/state from the list.';
$_['ms_catalog_sellerinfo_sellergroup'] = 'Seller group';

$_['ms_catalog_sellerinfo_country_dont_display'] = 'Do not display country';
$_['ms_catalog_sellerinfo_avatar'] = 'Avatar';
$_['ms_catalog_sellerinfo_paypal'] = 'Paypal';
$_['ms_catalog_sellerinfo_message'] = 'Message';
$_['ms_catalog_sellerinfo_message_note'] = 'Will be appended to the default email text';
$_['ms_catalog_sellerinfo_notify'] = 'Notify seller via email';
$_['ms_catalog_sellerinfo_product_validation'] = 'Product validation';
$_['ms_catalog_sellerinfo_product_validation_note'] = 'Product validation for this seller';

$_['ms_error_sellerinfo_nickname_empty'] = 'Nickname cannot be empty';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Nickname can only contain alphanumeric symbols';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Nickname can only contain printable UTF-8 symbols';
$_['ms_error_sellerinfo_nickname_latin'] = 'Nickname can only contain alphanumeric symbols and diacritics';
$_['ms_error_sellerinfo_nickname_length'] = 'Nickname should be between 4 and 50 characters';
$_['ms_error_sellerinfo_nickname_taken'] = 'This nickname is already taken';

// Catalog - Products
$_['ms_catalog_products_heading'] = 'Products';
$_['ms_catalog_products_breadcrumbs'] = 'Products';
$_['ms_catalog_products_notify_sellers'] = 'Notify Sellers';
$_['ms_catalog_products_bulk'] = '--Bulk status change--';
$_['ms_catalog_products_noseller'] = '--No seller--';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Active';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Inactive';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Disabled';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Deleted';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'Unpaid listing fee';

$_['ms_catalog_products_field_meta_keyword'] 	 = 'Meta Tag Keywords';
$_['ms_catalog_products_field_meta_description'] = 'Meta Tag Description';
$_['ms_catalog_products_field_model']            = 'Model';
$_['ms_catalog_products_field_sku']              = 'SKU';
$_['ms_catalog_products_field_upc']              = 'UPC';
$_['ms_catalog_products_field_ean']              = 'EAN';
$_['ms_catalog_products_field_jan']              = 'JAN';
$_['ms_catalog_products_field_isbn']             = 'ISBN';
$_['ms_catalog_products_field_mpn']              = 'MPN';
$_['ms_catalog_products_field_manufacturer']     = 'Manufacturer';
$_['ms_catalog_products_field_date_available']   = 'Date Available';
$_['ms_catalog_products_field_stock_status']     = 'Out Of Stock Status';
$_['ms_catalog_products_field_tax_class']        = 'Tax Class';
$_['ms_catalog_products_field_subtract']         = 'Subtract Stock';

// Catalog - Seller Groups
$_['ms_catalog_seller_groups_heading'] = 'Seller groups';
$_['ms_catalog_seller_groups_breadcrumbs'] = 'Seller Groups';

$_['ms_seller_groups_column_id'] = 'ID';
$_['ms_seller_groups_column_name'] = 'Name';
$_['ms_seller_groups_column_action'] = 'Actions';

$_['ms_catalog_insert_seller_group_heading'] = 'New Seller Group';
$_['ms_catalog_edit_seller_group_heading'] = 'Edit Seller Group';

$_['ms_product_period'] = 'Product listing period in days (0 for unlimited)';
$_['ms_product_quantity'] = 'Product quantity (0 for no limit)';

$_['ms_error_seller_group_name'] = 'Error: Name must be between 3 and 32 symbols long';
$_['ms_error_seller_group_default'] = 'Error: Default seller group can not be deleted!';
$_['ms_success_seller_group_created'] = 'Seller group created';
$_['ms_success_seller_group_updated'] = 'Seller group updated';

// Payments
$_['ms_payment_heading'] = 'Payments';
$_['ms_payment_breadcrumbs'] = 'Payments';
$_['ms_payment_payout_requests'] = 'Payout requests';
$_['ms_payment_payouts'] = 'Manual payouts';
$_['ms_payment_pending'] = 'Pending';
$_['ms_payment_new'] = 'New payment';
$_['ms_payment_paid'] = 'Paid';
$_['ms_payment_deduct'] = 'Deduct from balance';
$_['ms_payment_payout_paypal'] = 'Pay out via PayPal';
$_['ms_payment_payout_paypal_invalid'] = 'PayPal address not specified or invalid';
$_['ms_payment_mark'] = 'Mark as paid';
$_['ms_payment_delete'] = 'Delete payment record';

$_['ms_payment_type_' . MsPayment::TYPE_SIGNUP] = 'Signup fee';
$_['ms_payment_type_' . MsPayment::TYPE_LISTING] = 'Listing fee';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT] = 'Manual payout';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT_REQUEST] = 'Payout request';
$_['ms_payment_type_' . MsPayment::TYPE_RECURRING] = 'Recurring payment';
$_['ms_payment_type_' . MsPayment::TYPE_SALE] = 'Sale';

$_['ms_payment_status_' . MsPayment::STATUS_UNPAID] = 'Unpaid';
$_['ms_payment_status_' . MsPayment::STATUS_PAID] = 'Paid';

$_['ms_error_payment_fromto'] = 'Only store to seller and seller to store payments are supported.';
$_['ms_error_payment_fromstore'] = 'Outgoing payments (store to seller) can only be of types Payout or Payout request';
$_['ms_error_payment_tostore'] = 'Incoming payments (seller to store) can not be of types Payout or Payout request';
$_['ms_error_payment_amount'] = 'Please specify a valid payment amount';
$_['ms_error_payment_norequests'] = 'Error: no valid payouts to process. Please make sure the sellers have enough funds and valid PayPal addresses specified';
$_['ms_success_payment_created'] = 'Payment successfully created';

// Debug
$_['ms_debug_heading'] = 'Debug';
$_['ms_debug_breadcrumbs'] = 'Debug';
$_['ms_debug_info'] = 'MultiMerch debug information';

// Finances - Transactions
$_['ms_transactions_heading'] = 'Transactions';
$_['ms_transactions_breadcrumbs'] = 'Transactions';
$_['ms_transactions_new'] = 'New transaction';

$_['ms_error_transaction_fromto'] = 'Please specify at least the source or the destination seller';
$_['ms_error_transaction_fromto_same'] = 'Source and destination cannot be the same';
$_['ms_error_transaction_amount'] = 'Please specify a valid positive amount';
$_['ms_success_transaction_created'] = 'Transaction successfully created';

$_['button_cancel'] = 'Cancel';
$_['button_save'] = 'Save';
$_['ms_action'] = 'Action';

// Attributes
$_['ms_attribute_heading'] = 'Attributes';
$_['ms_attribute_breadcrumbs'] = 'Attributes';
$_['ms_attribute_create'] = 'New attribute';
$_['ms_attribute_edit'] = 'Edit attribute';
$_['ms_attribute_group'] = 'Attribute group';
$_['ms_attribute_value'] = 'Attribute value';
$_['ms_attribute_text_type'] = 'Text input type';
$_['ms_attribute_normal'] = 'Generic text';
$_['ms_attribute_multilang'] = 'Language-specific text';
$_['ms_attribute_number'] = 'Number';
$_['ms_attribute_required'] = 'Required';
$_['ms_attribute_tab_display'] = 'Display as product tab';
$_['ms_add_attribute_value'] = 'New attribute value';
$_['ms_error_attribute_name'] = 'Attribute name must be between 1 and 128 characters';
$_['ms_error_attribute_type'] = 'This attribute type requires attribute values';
$_['ms_error_attribute_value_name'] = 'Attribute value name must be between 1 and 128 characters';
$_['ms_success_attribute_created'] = 'Attribute successfully created';
$_['ms_success_attribute_updated'] = 'Attribute successfully updated';

$_['button_cancel'] = 'Cancel';
$_['button_save'] = 'Save';
$_['ms_action'] = 'Action';

// Mails
$_['ms_mail_greeting'] = "Hello %s,\n\n";
$_['ms_mail_greeting_no_name'] = "Hello,\n\n";
$_['ms_mail_ending'] = "\n\nRegards,\n%s";
$_['ms_mail_message'] = "\n\nMessage:\n%s";

$_['ms_mail_subject_seller_account_modified'] = 'Seller account modified';
$_['ms_mail_seller_account_modified'] = <<<EOT
Your seller account at %s has been modified by the administrator.

Account status: %s
EOT;

$_['ms_mail_subject_product_modified'] = 'Product modified';
$_['ms_mail_product_modified'] = <<<EOT
Your product %s at %s has been modified by the administrator.

Product status: %s
EOT;

$_['ms_mail_subject_product_purchased'] = 'New order';
$_['ms_mail_product_purchased'] = <<<EOT
Your product(s) have been purchased from %s.

Customer: %s (%s)

Products:
%s
Total: %s
EOT;

$_['ms_mail_product_purchased_no_email'] = <<<EOT
Your product(s) have been purchased from %s.

Customer: %s

Products:
%s
Total: %s
EOT;

$_['ms_mail_product_purchased_info'] = <<<EOT
\n
Delivery address:

%s %s
%s
%s
%s
%s %s
%s
%s
EOT;

$_['ms_mail_product_purchased_comment'] = '評價: %s';

// Sales - Mail
$_['ms_transaction_order_created'] = '訂單建立';
$_['ms_transaction_order'] = '銷售: 訂單編號 #%s';
$_['ms_transaction_sale'] = '銷售: %s (-%s 佣金)';
$_['ms_transaction_refund'] = '退款: %s';
$_['ms_payment_method'] = '付款方式';
$_['ms_payment_method_balance'] = '賣家餘額';
$_['ms_payment_method_paypal'] = 'PayPal';
$_['ms_payment_method_inherit'] = 'Inherit';
$_['ms_payment_royalty_payout'] = '版稅支付 to %s at %s';
$_['ms_payment_generic'] = '付款 #%s 在 %s';
$_['ms_payment_completed'] = '付款完成';

?>
