<?php  

$xmltx1111=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>1111</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<PaymentNo/>  
		<Amount/>  
		<Fee/>
		<PayerID/>
		<PayerName/>
		<SplitType/>
		<SettlementFlag/>
		<Usage/>
		<Remark/>  
		<NotificationURL/>  
		<BankID/>  
		<AccountType/> 
	</Body>
</Request>
XML;

$xmltx1112=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>1112</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<Amount/>
		<PayerID/>
		<PayerName/>
		<SplitType/>
		<SettlementFlag/>
		<Usage/>
		<Remark/>
		<Note/>
		<NotificationURL/>
	</Body> 
</Request>
XML;

$xmltx1115=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>1115</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<Amount/>
		<PayerName/>
		<SettlementFlag/>
		<Usage/>
		<Remark/>
		<NotificationURL/>
		<BankID/>
		<AccountType/>
	</Body> 
</Request>
XML;

$xmltx1118=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1118</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
		<Amount/>
		<Status/>
		<SplitType/>
		<SplitResult/>
		<BankNotificationTime/>
  </Body> 
</Request>
XML;

$xmltx1119=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>1119</TxCode>
	</Head>
	<Body>
		<BranchID/>
		<InstitutionID/>
		<PaymentNo/>
		<PayerID/>
		<PayerName/>
		<Amount/>
		<Status/>
		<SettlementFlag/>
		<Usage/>
		<PaidTime/>
		<Remark/>
	</Body> 
</Request>
XML;

$xmltx1120=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1120</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
    <SourceTxTime/> 
  </Body> 
</Request>
XML;

$xmltx1121=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1121</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
    <PaymentNo/> 
    <SourceTxTime/> 
  </Body>
</Request>
XML;

$xmltx1131=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1131</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
    <PaymentNo/> 
    <SourceTxTime/> 
		<Amount/>
		<Remark/>
		<AccountType/>
		<PaymentAccountName/>
		<PaymentAccountNumber/>
		<BankAccount>
			<BankID/>
			<AccountName/>
			<AccountNumber/>
			<BranchName/>
			<Province/>
			<City/>
		</BankAccount>
		<RefundType/>
  </Body> 
</Request>
XML;

$xmltx1132=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1132</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
		<SourceTxTime/> 
  </Body> 
</Request>
XML;

$xmltx1133=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1133</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
		<PaymentNo/>
		<SourceTxTime/> 
		<Amount/>
		<SettlementFlag/>
		<Remark/>
		<RefundType/>
  </Body> 
</Request>
XML;

$xmltx1134=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1134</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
    <PaymentNo/> 
		<Amount/>
		<Remark/>
		<AccountType/>
		<PaymentAccountName/>
		<PaymentAccountNumber/>
		<BankAccount>
			<BankID/>
			<AccountName/>
			<AccountNumber/>
			<BranchName/>
			<Province/>
			<City/>
		</BankAccount>
  </Body> 
</Request>
XML;

$xmltx1138=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1138</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<SerialNumber/>
		<PaymentNo/>
		<Amount/>
		<Status/>
		<RefundTime/>
  </Body> 
</Request>
XML;

$xmltx1139=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1139</TxCode> 
    <InstitutionID/>
  </Head>  
  <Body> 
		<CloseNo/>
		<PaymentNo/>
  </Body> 
</Request>
XML;

$xmlNotification=<<<XML
<?xml version="1.0" encoding="UTF-8"?><Response version="2.0"><Head><Code/><Message/></Head></Response>
XML;

/**
PayeeList can be composited by several Payees.
*/
$xmltx1301=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>1301</TxCode>
</Head>
<Body>
<OrderNo/>
<TxSNBinding/>
<PaymentNo/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx1302=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>1302</TxCode>
</Head>
<Body>
<OrderNo/>
<TxSNBinding/>
<PaymentNo/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx1303=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>1303</TxCode>
</Head>
<Body>
<OrderNo/>
<SMSValidationCode/>
<PaymentNo/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;


$xmltx1311=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>1311</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<OrderNo/>  
		<PaymentNo/>  
		<Amount/>
		<PayerID/>
		<PayerName/>
		<Usage/>  
		<Remark/>  
		<NotificationURL/>  
		<PayeeList>
			<Payee/>
		</PayeeList>  
		<BankID/>  
		<AccountType/>
		<CardType/>
	</Body> 
</Request>
XML;

$xmltx1312=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>1312</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<OrderNo/>  
		<PaymentNo/>  
		<Amount/>
		<PayerID/>
		<PayerName/>
		<Usage/>  
		<Remark/>
		<Note/>  
		<NotificationURL/>  
		<PayeeList>
			<Payee/>
		</PayeeList>  
	</Body> 
</Request>
XML;

$xmltx1318=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1318</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
		<Amount/>
		<Fee/>
		<Status/>
		<BankNotificationTime/>
  </Body> 
</Request>
XML;

$xmltx1320=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1320</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
    <SourceTxTime/> 
  </Body> 
</Request>
XML;

$xmltx1321=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1321</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
    <SourceTxTime/> 
  </Body> 
</Request>
XML;

$xmltx1330=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1330</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <OrderNo/>
    <StartDate/> 
    <EndDate/>
  </Body> 
</Request>
XML;

$xmltx1333=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1333</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/> 
    <SerialNumber/> 
    <OrderNo/>
    <PaymentNo/> 
    <Amount/>
    <Remark/>
  </Body> 
</Request>
XML;

$xmltx1341=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1341</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
		<SerialNumber/>  
		<OrderNo/>  
		<Amount/>  
		<Remark/>  
		<AccountType/>  
		<PaymentAccountName/>  
		<PaymentAccountNumber/> 
		<BankNoByPBC/> 
		<BankAccount> 
			<BankID/>  
			<AccountName/>  
			<AccountNumber/>  
			<BranchName/>  
			<Province/>  
			<City/> 
		</BankAccount> 
		<Note/>
  </Body> 
</Request>
XML;

$xmltx1342=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1342</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<OrderNo/>  
		<BatchNo/>    
		<TotalAmount/>  
		<TotalCount/>  
		<Remark/>  
  </Body> 
</Request>
XML;

$xmltx1343=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1343</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
		<SerialNumber/>  
		<OrderNo/> 
		<SourceTxTime/>  
		<Amount/>  
		<Remark/>  
		<AccountType/>  
		<PaymentAccountName/>  
		<PaymentAccountNumber/>  
		<BankAccount> 
			<BankID/>  
			<AccountName/>  
			<AccountNumber/>  
			<BranchName/>  
			<Province/>  
			<City/> 
		</BankAccount> 
		<BankNoByPBC/>
  </Body> 
</Request>
XML;

$xmltx1344=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1344</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<OrderNo/>
		<BatchNo/>   		
  </Body> 
</Request>
XML;

$xmltx1347=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1347</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<TxDate/> 		
  </Body> 
</Request>
XML;

$xmltx1345=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1345</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<ReversalTxNo/>  
		<OrderNo/>  
		<SerialNumber/>  
		<Remark/>  		
  </Body> 
</Request>
XML;

$xmltx1348=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1348</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<SerialNumber/>  
		<OrderNo/>  
		<Amount/>
		<Staus/>
		<TransferTime/>
		<ErrorMessage/>  		
  </Body> 
</Request>
XML;

$xmltx1350=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1350</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<SerialNumber/>   		
  </Body> 
</Request>
XML;

$xmltx1361=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1361</TxCode>
	<OrderNo/>
	<TxSN/>
</Head>
<Body>
	<Amount/>
	<BankID/>
	<AccountType/>
	<AccountName/>
	<AccountNumber/>
	<BranchName/>
	<Province/>
	<CVN2/>
	<IdentificationType/>
	<IdentificationNumber/>
	<Note/>
	<ContractUserID/>
	<PhoneNumber/>
	<Email/>
	<PayeeList>
		<Payee/>
	</PayeeList>
	<CardMediaType/>
	<BankNoByPBC/>
</Body>
</Request>
XML;

$xmltx1362=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1362</TxCode>
	<TxSN/>
	<SourceTxTime/>
</Head>
</Request>
XML;

$xmltx1363=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1363</TxCode>
	<OrderNo/>
	<TxSN/>
</Head>
<Body>
	<Amount/>
	<Status/>
	<BankTxTime/>
	<ResponseCode/>
	<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx1365=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1365</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PayType/>
	<OrderNo/>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
	</Body>
</Request>
XML;

$xmltx1366=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1366</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<BatchNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1367=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1367</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<BatchNo/>
	<ItemNo/>
</Body>
</Request>
XML;

$xmltx1371=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1371</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<TxSNBinding/>
	<ValidDate/>
  <CVN2/>
  <SharedInstitutionID/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1372=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1372</TxCode>
</Head>
<Body>
	<PaymentNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1373=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1373</TxCode>
</Head>
<Body>
	<TxSN/>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<Remark/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1374=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1374</TxCode>
</Head>
<Body>
	<TxSN/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1375=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1375</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<TxSNBinding/>
	<Amount/>
	<Remark/>
	<ValidDate/>
  <CVN2/>
  <SharedInstitutionID/>
</Body>
</Request>
XML;

$xmltx1376=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1376</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<SMSValidationCode/>
	<ValidDate/>
  <CVN2/> 
</Body>
</Request>
XML;

$xmltx1380=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1380</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<Usage/>
	<PhoneNumber/>
	<Email/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1382=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1382</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PaymentNo/>
</Body>
</Request>
XML;

$xmltx1388=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1388</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PaymentNo/>
	<PhoneNumber/>
	<Amount/>
	<Status/>
	<TxTime/>
	<BankTxTime/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1390=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1390</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<PaymentNo/>
</Body>
</Request>
XML;

$xmltx1391=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1391</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<AccountNumber/>
	<PhoneNumber/>
	<MerchantID/>
	<MerchantName/>
	<MerchantShortName/>
	<MCC/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1392=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1392</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<SMSValidationCode/>
</Body>
</Request>
XML;

$xmltx1393=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1393</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<AccountNumber/>
	<MerchantID/>
	<MerchantName/>
	<MerchantShortName/>
	<MCC/>
	<Remark/>
	<PageURL/>
</Body>
</Request>
XML;

$xmltx1394=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1394</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PaymentNo/>
	<Status/>
	<BankTxTime/>
	<ResponseCode/>
	<ResponseMessage/>
	<PayCardType/>
</Body>
</Request>
XML;

$xmltx1395=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1395</TxCode>
</Head>
<Body>
	<PaymentNo/>
</Body>
</Request>
XML;

$xmltx1396=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1396</TxCode>
</Head>
<Body>
	<SerialNumber/>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<MerchantID/>
	<MerchantName/>
	<MerchantShortName/>
	<MCC/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1397=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1397</TxCode>
</Head>
<Body>
	<SerialNumber/>
</Body>
</Request>
XML;

$xmltx1401=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1401</TxCode>
</Head>
<Body>
  <InstitutionID/>
	<OrderNo/> 
	<PaymentNo/>
	<PaymentWay/>
	<Amount/>
	<ExpirePeriod/>
	<Subject/>
	<DiscountAmount/>
	<ProductID/>
	<OperatorID/>
	<StoreID/>
	<TerminalMerchantID/>
	<TerminalID/>
	<GoodsTag/>
	<Remark/>
	<NotificationURL/>
	<PageUrl/>
	<PageUrlType/>
	<CancelPageUrl/>
</Body>
</Request>
XML;

$xmltx1402=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1402</TxCode>
</Head>
<Body>
  <InstitutionID/>
	<OrderNo/> 
	<PaymentNo/>
	<PaymentWay/>
	<PaymentScene/>
	<PreTxSN/>
	<AuthCode/>
	<Amount/>
	<ExpirePeriod/>
	<Subject/>
	<ProductID/>
	<GoodsTag/>
	<Remark/>
	<NotificationURL/>
	<TerminalMerchantID/>
	<SubAppID/>
</Body>
</Request>
XML;

$xmltx1403=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1403</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<OrderNo/> 
	<PaymentNo/>
	<PaymentWay/>
	<UserID/>
	<Amount/>
	<ExpirePeriod/>
	<Subject/>
	<GoodsTag/>
	<OperatorID/>
	<StoreID/>
	<TerminalID/>
	<Remark/>
	<NotificationURL/>
	<PageUrl/>
	<MiniAppFlag/>
	<LimitPay/>
	<TerminalMerchantID/>
	<AppID/> 
</Body>
</Request>
XML;

$xmltx1404=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1404</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<CloseNo/> 
	<PaymentNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1405=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1405</TxCode>
</Head>
<Body>
	<InstitutionID/>	
	<SerialNumber/> 
	<PaymentNo/>
	<SourceTxTime/>
	<Amount/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1406=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1406</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<SerialNumber/> 
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1408=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1408</TxCode>
</Head>
<Body>
  <InstitutionID/>
	<OrderNo/> 
	<PaymentNo/>
	<PaymentWay/>
	<Status/>
	<CardType/>
	<Amount/>
	<Fee/>
	<CouponAmount/>
	<BankNotificationTime/>
	<PayerID/>
	<OperatorID/>
	<StoreID/>
  <TerminalID/>
	<ResponseCode/>
	<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx1410=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1410</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<PaymentNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1411=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1411</TxCode>
	 <InstitutionID/>
</Head>
<Body>
  <OrderNo/> 
	<PaymentNo/>
	<PaymentWay/>
	<AppID/>
	<Amount/>
	<LimitPay/>
	<ExpirePeriod/>
	<Subject/>
	<GoodsTag/>
	<OperatorID/>
	<StoreID/>
	<TerminalID/>
	<Remark/>
	<NotificationURL/>
	<TerminalMerchantID/>
</Body>
</Request>
XML;

$xmltx1451=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1451</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
  <OrderNo/> 
	<Amount/>
	<PayerName/>
	<ExpirePeriod/>
	<ActiveDays/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1452=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1452</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
</Body>
</Request>
XML;


$xmltx1453=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1453</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <SerialNumber/>
  <OrderNo/>
  <PaymentSN/>
  <RefundMode/>
  <SourceTxSN/>
   <Amount/>
  <Reason/>
  <Remark/>
</Body>
</Request>
XML;

$xmltx1454=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1454</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <SerialNumber/>
</Body>
</Request>
XML;

$xmltx1455=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1455</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <SourceTxSN/>
  <OrderNo/>
  <Amount/>
  <PayedAmount/>
  <Udid/>
  <Status/>
  <ActiveFlag/>
</Body>
</Request>
XML;

$xmltx1456=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1456</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <PaymentSN/>
  <SourceTxSN/>
  <OrderNo/>
  <Udid/>
  <Amount/>
  <PayerBankID/>
  <PayerBankNoByPBC/>
  <PayerAccountName/>
  <PayerAccountNumber/>
  <PayerBranchName/>
  <PayerProvince/>
  <PayerCity/>
  <InvalidMessage/>
</Body>
</Request>
XML;

$xmltx1458=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1458</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
  <SourceTxType/>
  <SourceTxSN/>
  <PhoneNumber/>
  <MerchantName/>
</Body>
</Request>
XML;

$xmltx1461=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1461</TxCode>
	<OrderNo/>
	<TxSN/>
</Head>
<Body>
	<Amount/>
	<BankID/>
	<AccountType/>
	<AccountName/>
	<AccountNumber/>
	<BranchName/>
	<Province/>
	<CVN2/>
	<IdentificationType/>
	<IdentificationNumber/>
	<Note/>
	<ContractUserID/>
	<PhoneNumber/>
	<Email/>
	<PayeeList>
		<Payee/>
	</PayeeList>
</Body>
</Request>
XML;

$xmltx1462=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1462</TxCode>
	<OrderNo/>
	<TxSN/>
</Head>
<Body>
	<Amount/>
	<Status/>
	<BankTxTime/>
	<ResponseCode/>
	<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx1463=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1463</TxCode>
	<TxSN/>
</Head>
</Request>
XML;

$xmltx1471=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1471</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
  <OrderTxSN/>
  <Remark/>
</Body>
</Request>
XML;

$xmltx1510=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1510</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
	<PaymentFlag/>
	<PaymentAccountName/>
	<PaymentAccountNumber/>
	<!-- <Item>
		<ItemNo>
		<Amount>
		<BankID>
		<AccountType>
		<AccountName>
		<AccountNumber>
		<BankNoByPBC>
		<BranchName>
		<Province>
		<City>
		<Note>
		<PhoneNumber>
		<Email>
		<IdentificationType>
		<IdentificationNumber>
	</Item> -->

</Body>
</Request>
XML;


$xmltx1520=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1520</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
</Body>
</Request>
XML;

$xmltx1550=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1550</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<Date/>
</Body>
</Request>
XML;

$xmltx1560=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1560</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<SubInstitutionID/>
	<Date/>
</Body>
</Request>
XML;

$xmltx1610=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1610</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PayType/>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1620=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1620</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1630=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1630</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
	<ItemNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx1650=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1650</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<Date/>
</Body>
</Request>
XML;

$xmltx1660=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1660</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<SubInstitutionID/>
	<Date/>
</Body>
</Request>
XML;

$xmltx1701=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1701</TxCode> 
	</Head>  
	<Body> 
		<TxSN/>
		<Amount/>  
		<PayerID/> 
		<PayerName/> 
		<Usage/> 
		<Remark/> 
		<PageURL/>  
	</Body> 
</Request>
XML;

$xmltx1702=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>1702</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx1703=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>1703</TxCode>
</Head>
<Body>
<TxSN/>
<SMSTxSN/>
<SMSValidationCode/>
<BingTokenCode/>
<Amount/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

$xmltx1705=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>1705</TxCode>
</Head>
<Body>
<TxSN/>
<AuthTxSN/>
<Remark/>
</Body>
</Request>
XML;

$xmltx1706=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>1706</TxCode>
</Head>
<Body>
<TxSN/>
<AuthTxSN/>
<Amount/>
<SettlementType/>
<SplitType/>
<Remark/>
</Body>
</Request>
XML;


$xmltx1711=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1711</TxCode> 
	</Head>  
	<Body> 
		<TxSN/>  
		<PayTxSN/>
		<Amount/>  
		<Remark/>
	</Body> 
</Request>
XML;

$xmltx1717=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1717</TxCode> 
	</Head>  
	<Body> 
		<TxSN/>  
		<TxType/>
	</Body> 
</Request>
XML;

$xmltx1711_1=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1711_1</TxCode> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Amount/>  
		<PayerID/> 
		<PayerName/> 
		<Usage/> 
		<Remark/> 
		<PageURL/>  
		<BankID/>  
		<AccountType/>
	</Body> 
</Request>
XML;

$xmltx1712=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1712</TxCode> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Amount/>  
		<Status/>  
		<BankTxTime/>
	</Body> 
</Request>
XML;

$xmltx1713=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1713</TxCode> 
	</Head>  
	<Body> 
		<OrderNo/>  
	</Body> 
</Request>
XML;

$xmltx1715=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1715</TxCode>
</Head>
<Body>
	<OrderNo/>
	<Amount/>
	<BankID/>
	<AccountType/>
	<ValidDate/>
	<CVN2/>
	<AccountName/>
	<AccountNumber/>
	<IdentificationType/>
	<IdentificationNumber/>
	<Note/>
	<ContractUserID/>
	<PhoneNumber/>
	<Email/>
</Body>
</Request>
XML;

$xmltx1721=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1721</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Remark/> 
	</Body> 
</Request>
XML;

$xmltx1722=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1722</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Status/> 
		<BankTxTime/>
		<ResponseCode/>
		<ResponseMessage/>
	</Body> 
</Request>
XML;

$xmltx1723=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1723</TxCode> 
		<TxSN/> 
	</Head>  
</Request>
XML;

$xmltx1731=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1731</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Amount/>  
		<Remark/> 
	</Body> 
</Request>
XML;

$xmltx1732=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1732</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Status/> 
		<BankTxTime/>
		<ResponseCode/>
		<ResponseMessage/>
	</Body> 
</Request>
XML;

$xmltx1733=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1733</TxCode> 
		<TxSN/> 
	</Head>  
</Request>
XML;

$xmltx1741=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>1741</TxCode> 
		<TxSN/>  
  </Head>  
  <Body> 
		<OrderNo/>  
		<Amount/>  
		<Remark/>  
		<AccountType/>  
		<BankAccount> 
		<BankID/>  
		<AccountName/>  
		<AccountNumber/>  
		<BranchName/>  
		<Province/>  
		<City/> 
		</BankAccount> 
  </Body> 
</Request>
XML;

$xmltx1810=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1810</TxCode> 
  </Head>  
  <Body> 
	<InstitutionID/> 
	<SplitInstitutionID/>
	<SplitSettlementFlag/>
    <Date/> 
  </Body> 
</Request>
XML;

$xmltx1811=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1811</TxCode> 
  </Head>  
  <Body> 
	<InstitutionID/>  
	<SplitInstitutionID/>
    <SplitSettlementFlag/>
    <Date/> 
    <PageNO/>
    <CountPerPage/>
  </Body> 
</Request>
XML;

$xmltx1820=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1820</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
		<SubInstitutionID/>
    <Date/> 
  </Body> 
</Request>
XML;

$xmltx1821=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1821</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/> 
		<SubInstitutionID/> 
    <Date/> 
    <PageNO/>
    <CountPerPage/>
  </Body> 
</Request>
XML;

$xmltx1830=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1830</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
    <BatchNo/> 
  </Body> 
</Request>
XML;

$xmltx1840=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1840</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
		<InstitutionIDSupervised/>
    <Date/> 
    <SettlementFlag/>
  </Body> 
</Request>
XML;

$xmltx1850=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1850</TxCode> 
  </Head>  
  <Body> 
	<InstitutionID/>
	<BillDate/>
	<PayeeUserID/>
	<BatchNO/>
  </Body> 
</Request>
XML;

$xmltx1818=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1818</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
    <TxDate/> 
  </Body> 
</Request>
XML;

$xmltx1910=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1910</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
</Body>
</Request>
XML;

$xmltx1920=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/> 
    <TxCode>1920</TxCode> 
  </Head>  
  <Body> 
		<BatchNo/>  
  </Body> 
</Request>
XML;

$xmltx1930=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/> 
    <TxCode>1930</TxCode> 
  </Head>  
  <Body> 
		<BatchNo/>  
		<ItemNo/>
  </Body> 
</Request>
XML;

$xmltx1950=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/> 
    <TxCode>1950</TxCode> 
  </Head>  
  <Body> 
		<Date/>  
  </Body> 
</Request>
XML;

$xmltx1960=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1960</TxCode> 
  </Head>  
  <Body> 
		<TxSN/>  
		<InstitutionID/>
	<Payer>
		<PaymentType/>
		<TxSNBinding/>
		<PayerBankID/>	
		<PayerAccountType/>
		<PayerAccountName/>
		<PayerAccountNumber/>
		<PayerBranchName/>
		<PayerProvince/>
		<PayerCity/>
		<PayerIdentificationType/>
		<PayerIdentificationNumber/>
		<PayerCardMediaType/>
		<PayerRemark/>
	</Payer>
	<Payee>
		<PayeeBankID/>
		<PayeeAmount/>
		<PayeeAccountType/>
		<PayeeAccountName/>
		<PayeeAccountNumber/>
		<PayeeBranchName/>
		<PayeeProvince/>
		<PayeeCity/>
	    <PayeeRemark/>
	</Payee>
	<CouponAmount/>
	<CouponAccountName/>
	<CouponAccountNumber/>
	<ProfitAmount/>
	<RefundRemark/>
  </Body> 
</Request>
XML;

$xmltx1965=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1965</TxCode> 
  </Head>  
  <Body> 
  	<InstitutionID/> 
	<TxSN/>  
  </Body> 
</Request>
XML;

$xmltx1966=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
     <TxCode>1966</TxCode> 
  </Head>  
  <Body> 
  	<InstitutionID/> 
	<TxSN/>  
  </Body> 
</Request>
XML;

$xmltx2011=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2011</TxCode> 
		<TxSN/>  
  </Head>  
  <Body> 
		<Amount/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<BranchName/>
		<Province/>
		<City/>
		<IdentificationType/>
		<IdentificationNumber/>
		<Note/>
		<Reserve1/>
		<ContractUserID/>
		<PhoneNumber/>
		<Email/>
		<SplitType/>
		<SettlementFlag/>
		<CardMediaType/>
		<BankCardAmount/>
<DiscountPay>
	<DiscountAccountFlag/>
	<DiscountAmount/>
</DiscountPay>
  </Body> 
</Request>
XML;

$xmltx2018=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>2018</TxCode> 
    <InstitutionID/>
    <TxSN/>
  </Head>  
  <Body> 
		<Amount/>
		<Status/>
		<SplitType/>
		 <SplitResult/>
		<BankTxTime/>
		<ResponseCode/>
		<ResponseMessage/>
  </Body> 
</Request>
XML;

$xmltx2020=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>
  	<InstitutionID/>
  	<TxCode>2020</TxCode>
  	<TxSN/>
  	<SourceTxTime/>
  </Head>
</Request>
XML;

$xmltx2021=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>
  	<InstitutionID/>
    <TxCode>2021</TxCode>
  </Head>
  <Body>
	<TxSN/>
	<SourceTxCode/>
	<SourceTxSN/>
	<SourceBatchNo/>
	<SourceTxTime/>
	<Amount/>
	<SettlementFlag/>
	<Remark/>
	<BankCardAmount/>
<DiscountRefund>
	<DiscountAccountFlag/>
	<DiscountAmount/>
</DiscountRefund>
  </Body> 
</Request>
XML;

$xmltx2022=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>
  	<InstitutionID/>
    <TxCode>2022</TxCode>
  </Head>
  <Body>
	<TxSN/>
	<SourceTxTime/>
  </Body> 
</Request>
XML;

$xmltx2031=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2031</TxCode> 
		<TxSN/>  
  </Head>  
  <Body> 
		<Amount/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<BranchName/>
		<Province/>
		<City/>
		<IdentificationType/>
		<IdentificationNumber/>
		<Note/>
		<ContractUserID/>
		<PhoneNumber/>
		<Email/>
		<SettlementFlag/>
		<CardMediaType/>
  </Body> 
</Request>
XML;

$xmltx2038=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2038</TxCode> 
		<TxSN/>  
  </Head>  
  <Body> 
		<Amount/>
		<Status/>
		<BankTxTime/>
		<ResponseCode/>
		<ResponseMessage/>
  </Body> 
</Request>
XML;

$xmltx2040=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>
  	<InstitutionID/>
  	<TxCode>2040</TxCode>
  	<TxSN/>
  </Head>
</Request>
XML;

$xmltx2051=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2051</TxCode> 	  
  </Head>  
  <Body> 
		<ApplyTxSN/>
		<BankID/>
		<CardType/>
		<AccountName/>
		<AccountNumber/>
		<IdentificationType/>
		<IdentificationNumber/>
		<PhoneNumber/>
		<AuthNo/>
		<AmountLimit/>
		<TimeStart/>
		<TimeEnd/>
		<AccountType/>
		<Frequency/>
		<Remark/>
  </Body> 
</Request>
XML;

$xmltx2052=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2052</TxCode> 	  
  </Head>  
  <Body> 
		<ApplyTxSN/>
		<ConfirmTxSN/>
		<VerifyCode/>
  </Body> 
</Request>
XML;

$xmltx2055=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2055</TxCode> 	  
  </Head>  
  <Body> 
		<ApplyTxSN/>
  </Body> 
</Request>
XML;

$xmltx2056=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2056</TxCode> 	  
  </Head>  
  <Body> 
		<TxSN/>
		<EntrustNo/>
  </Body> 
</Request>
XML;

$xmltx2057=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2057</TxCode> 	  
  </Head>  
  <Body> 
		<TxSN/>
  </Body> 
</Request>
XML;

$xmltx2060=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2060</TxCode> 	  
  </Head>  
  <Body> 
		<TxSN/>
		<BankID/>
		<AccountType/>
		<CardType/>
		<AccountName/>
		<AccountNumber/>
		<IdentificationType/>
		<IdentificationNumber/>
		<PhoneNumber/>
		<AuthNo/>
		<ContractTemplateID/>
		<AmountLimit/>
		<TimeStart/>
		<TimeEnd/>
		<TimeUnit/>
		<Frequency/>
		<Remark/>
  </Body> 
</Request>
XML;

$xmltx2061=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>2061</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<TxSN/>  
		<BankID/>
		<AccountType/> 
		<CardType/>
		<AccountName/> 
		<AccountNumber/>  
		<IdentificationType/>
		<IdentificationNumber/>
		<PhoneNumber/>
		<PayType/>
		<AuthNo/>
		<BusinessType/>
		<ContractTemplateID/>
		<AmountLimit/>
		<TimeStart/>  
		<TimeEnd/> 
		<TimeUnit/> 
		<TimeStep/> 
		<Frequency/> 
		<NotificationURL/>  
		<Remark/> 	
	</Body> 
</Request>
XML;

$xmltx2062=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2062</TxCode> 	  
  </Head>  
  <Body> 
		<TxSN/>
  </Body> 
</Request>
XML;

$xmltx2065=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2065</TxCode> 	  
  </Head>  
  <Body> 
		<TxSN/>
  </Body> 
</Request>
XML;

$xmltx2071=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>2071</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<TxSN/>  
		<BankID/>
		<AccountType/> 
		<CardType/>
		<AccountName/> 
		<AccountNumber/>  
		<IdentificationType/>
		<IdentificationNumber/>
		<PhoneNumber/>
		<LegalPersonName/>
		<LegalPersonIdentType/>
		<LegalPersonNumber/>
		<PayType/>
		<AuthNo/>
		<AmountLimit/>
		<TotalAmount/>
		<TimeStart/>  
		<TimeEnd/> 
		<TimeUnit/> 
		<TimeStep/> 
		<Frequency/> 
		<Remark/> 	
		<InfoReserved/> 
		<BusinessType/> 
	</Body> 
</Request>
XML;

$xmltx2072=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2072</TxCode> 	  
  </Head>  
  <Body> 
		<TxSN/>
  </Body> 
</Request>
XML;

$xmltx2082=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2082</TxCode> 	  
  </Head>  
  <Body> 
		<EntrustNo/>
		<TokenNo/>
  </Body> 
</Request>
XML;

$xmltx2101=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>  
    <TxCode>2101</TxCode> 	  
  </Head>  
  <Body>
	<InstitutionID/>
	<PaymentNo/>
	<RedirectSource/>
	<PayWay/>
	<PayType/>
	<BankID/>
	<UserID/>
	<Amount/>
	<LimitPay/>
	<SettlementFlag/>
	<SplitType/>
	<PlatformName/>
	<GoodsName/>
	<ClientIP/>
	<AppID/>
	<OpenID/>
	<InstallmentType/>
	<FeeMode/>
	<AccountNumber/>
	<NumberOfInstallments/>
	<ExpirePeriod/>
	 <PageUrl/>
	<Remark/>
	<Extension/>
	<GoodsTag/>
</Body>
</Request>
XML;

$xmltx2102=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>  
    <TxCode>2102</TxCode> 	  
  </Head>  
  <Body>
	<InstitutionID/>
	<PaymentNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2111=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>  
    <TxCode>2111</TxCode> 	  
  </Head>  
  <Body>
	<InstitutionID/>
	<RefundNo/>
	<PaymentNo/>
	<Amount/>
	<SettlementFlag/>
	<Remark/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2112=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>  
    <TxCode>2112</TxCode> 	  
  </Head>  
  <Body>
	<InstitutionID/>
	<RefundNo/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2121=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>  
    <TxCode>2121</TxCode> 	  
  </Head>  
  <Body>
	<InstitutionID/>
	<PaymentNo/>
	<CloseNo/>
	<CloseType/>
	<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2130=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>  
    <TxCode>2130</TxCode> 	  
  </Head>  
  <Body>
	<InstitutionID/>
	<PaymentNo/>
	<TxType/>
	<Scene/>
</Body>
</Request>
XML;

$xmltx2241=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2241</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
  <Amount/>
  <PayerName/>
  <ActiveDays/>
  <SettlementFlag/> 
  <Remark/>
</Body>
</Request>
XML;

$xmltx2243=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2243</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
  <FundArrivalNO/>
  <RefundMode/>
  <SourceTxSN/>
   <Amount/>
  <Reason/>
  <Remark/>
</Body>
</Request>
XML;

$xmltx2245=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2245</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
</Body>
</Request>
XML;

$xmltx2246=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2246</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
  <OrderTxSN />
  <Remark/>
</Body>
</Request>
XML;

$xmltx2250=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2250</TxCode>
	<InstitutionID/>
</Head>
<Body>
  <TxSN/>
</Body>
</Request>
XML;

$xmltx2310=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<InstitutionID/>
		<TxCode>2310</TxCode>
	</Head>
	<Body>
		<TxSN/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<IdentificationType/>
		<IdentificationNumber/>
		<Remark/>
		<PhoneNumber/>
		<Email/>
	</Body>
</Request>
XML;

$xmltx2320=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2320</TxCode>
</Head>
<Body>
<TxSN/>
<UserName/>
<IdentificationNumber/>
</Body>
</Request>
XML;

$xmltx2330=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2330</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<TxType/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx2331=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2331</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<TxType/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx2340=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2340</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx2341=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2341</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx2342=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2342</TxCode>
</Head>
<Body>
<TxSN/>
<SMSValidationCode/>
</Body>
</Request>
XML;

$xmltx2343=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2340</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<AccountLevel/>
</Body>
</Request>
XML;

$xmltx2351=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2351</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<BankID/>
<BranchName/>
<Province/>
<City/>
<Note/>
<CnapsCode/>
</Body>
</Request>
XML;

$xmltx2352=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2352</TxCode>
</Head>
<Body>
<TxSN/>
<Amount/>
</Body>
</Request>
XML;

$xmltx2353=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2353</TxCode>
	</Head>
	<Body>
	  <InstitutionID/>
		<TxSN/>
		<Status/>
		<ResponseTime/>
		<ResponseCode/>
		<ResponseMessage/>
	</Body>
</Request>
XML;

$xmltx2354=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2354</TxCode>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

$xmltx2360=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2360</TxCode>
</Head>
<Body>
<TxSN/>
<BizType/>
<PayeeUserID/>
<PayeeAccountNumber/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<AccountLevel/>
<CVN2/>
<CardType/>
</Body>
</Request>
XML;

$xmltx2361=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2361</TxCode>
</Head>
<Body>
<TxSN/>
<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2501=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2501</TxCode>
</Head>
<Body>
<TxSNBinding/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

$xmltx2502=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2502</TxCode>
</Head>
<Body>
<TxSNBinding/>
<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2503=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2503</TxCode>
</Head>
<Body>
<TxSNUnBinding/>
<TxSNBinding/>
</Body>
</Request>
XML;

$xmltx2504=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2504</TxCode>
</Head>
<Body>
<InstitutionID/>
<AccountNumber/>
</Body>
</Request>
XML;

$xmltx2507=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2507</TxCode>
</Head>
<Body>
<InstitutionID/>
<AccountNumber/>
<AccountName/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;


$xmltx2511=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2511</TxCode>
</Head>
<Body>
<PaymentNo/>
<Amount/>
<TxSNBinding/>
<SplitType/>
<SettlementFlag/>
<ValidDate/>
<CVN2/>
<SharedInstitutionID/>
<BankCardAmount/>
<DiscountPay>
	<DiscountAccountFlag/>
	<DiscountAmount/>
</DiscountPay>
<Remark/>
</Body>
</Request>
XML;

$xmltx2512=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2512</TxCode>
</Head>
<Body>
<PaymentNo/>
<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2521=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2521</TxCode>
</Head>
<Body>
<TxSN/>
<PaymentNo/>
<Amount/>
<SettlementFlag/>
<BankCardAmount/>
<DiscountRefund>
	<DiscountAccountFlag/>
	<DiscountAmount/>
</DiscountRefund>
<Remark/>
<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2522=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2522</TxCode>
</Head>
<Body>
<TxSN/>
<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx2531=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2531</TxCode>
</Head>
<Body>
<TxSNBinding/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

$xmltx2532=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2532</TxCode>
</Head>
<Body>
<TxSNBinding/>
<SMSValidationCode/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

$xmltx2533=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2533</TxCode>
</Head>
<Body>
<TxSN/>

</Body>
</Request>
XML;

$xmltx2541=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2541</TxCode>
</Head>
<Body>
<PaymentNo/>
<TxSNBinding/>
<Amount/>
<SplitType/>
<SettlementFlag/>
<ValidDate/>
<CVN2/>
<SharedInstitutionID/>
<Remark/>
</Body>
</Request>
XML;

$xmltx2542=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2542</TxCode>
</Head>
<Body>
<PaymentNo/>
<SMSValidationCode/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

$xmltx2551=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2551</TxCode>
</Head>
<Body>
<SerialNumber/>
<AccountNumber/>
<MerchantID/>
<MerchantName/>
<MerchantShortName/>
<MCC/>
<Remark/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx2552=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2552</TxCode>
</Head>
<Body>
<SerialNumber/>
<Status/>
<BankTxTime/>
<ResponseCode/>
<ResponseMessage/>
<PayCardType/>
<IssInsCode/>
</Body>
</Request>
XML;

$xmltx2553=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2553</TxCode>
</Head>
<Body>
<SerialNumber/>
<AccountNumber/>
</Body>
</Request>
XML;

$xmltx2561=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2561</TxCode>
</Head>
<Body>
<TxSNBinding/>
<PaymentNo/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
<Amount/>
<SplitType/>
<SettltmentFlag/>
<Remark/>
</Body>
</Request>
XML;

$xmltx2562=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2562</TxCode>
</Head>
<Body>
<TxSNBinding/>
<PaymentNo/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
<Amount/>
<SplitType/>
<SettlementFlag/>
<NumberOfInstallments/>
<FeeMode/>
<FeeRate/>
<Remark/>
</Body>
</Request>
XML;

$xmltx2563=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2563</TxCode>
</Head>
<Body>
<SMSValidationCode/>
<PaymentNo/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

$xmltx2568=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2568</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<Status/>
<AccountName/>
<AccountNumber/>
<IssueBankID/>
<IssueCardType/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx2571=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2571</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSNBinding/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
</Body>
</Request>
XML;

$xmltx2572=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2572</TxCode>
<InstitutionID/>
</Head>
<Body>

<TxSNBinding/>
<Delta/>
</Body>
</Request>
XML;

$xmltx2572=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2572</TxCode>
<InstitutionID/>
</Head>
<Body>

<TxSNBinding/>
<Delta/>
</Body>
</Request>
XML;

$xmltx2573=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2573</TxCode>
<InstitutionID/>
</Head>
<Body>

<TxSNBinding/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx2574=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2574</TxCode>
<InstitutionID/>
</Head>
<Body>

<TxSNBinding/>
<SMSValidationCode/>
</Body>
</Request>
XML;

$xmltx2575=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2575</TxCode>
<InstitutionID/>
</Head>
<Body>

<TxSNBinding/>
<Location/>
<NotSendPwd/>
</Body>
</Request>
XML;

$xmltx2601=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2601</TxCode>
</Head>
<Body>
<InstitutionID/>
<BatchNo/>
<ControlType/>
<TotalCount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx2603=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2603</TxCode>
</Head>
<Body>
<InstitutionID/>
<BatchNo/>
<ControlType/>
</Body>
</Request>
XML;

$xmltx2605=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2605</TxCode>
</Head>
<Body>
<InstitutionID/>
<ControlType/>
<AccountNumber/>
</Body>
</Request>
XML;

$xmltx2611=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>2611</TxCode> 
  </Head>  
  <Body>
    <InstitutionID/>
    <BatchNo/>  
		<ControlType/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<IdentificationType/>
		<IdentificationNumber/>
		<PhoneNumber/>
		<Email/>
  </Body> 
</Request>
XML;

$xmltx2701=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2701</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<TerminalType/>
<AccountType/>
<AccountName/>
<AccountNumber/>
<BankID/>
<BranchName/>
<Province/>
<City/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<Email/>
<Address/>
<ExpiredDate/>
<SMSFlag/>
<BizType/>
<TemplateID/>
<ContractInfos/>
<PersonalSignInfos/>
<InstitutionSignInfos/>
<Note/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx2703=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2703</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx2705=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2705</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<AccountType/>
<AccountName/>
<AccountNumber/>
<BankID/>
<BranchName/>
<Province/>
<City/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<Email/>
<Address/>
<ExpiredDate/>
<SMSFlag/>
<BizType/>
<TemplateID/>
<ContractInfos/>
<PersonalSignInfos/>
<InstitutionSignInfos/>
<Note/>
</Body>
</Request>
XML;

$xmltx2760=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2760</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

$xmltx2761=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2761</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<PurchaserName/>
<PurchaserTaxNo/>
<PurchaserBank/>
<PurchaserAddressPhone/>
<PurchaserEmail/>
<PurchaserMobNo/>
<CommodityName/>
</Body>
</Request>
XML;

$xmltx2762=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2762</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<SourceTxSN/>
</Body>
</Request>
XML;

$xmltx2763=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2763</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<SourceTxSN/>
<PurchaserName/>
<PurchaserTaxNo/>
<PurchaserBank/>
<PurchaserAddressPhone/>
<PurchaserEmail/>
<PurchaserMobNo/>
<CommodityName/>
</Body>
</Request>
XML;

$xmltx2764=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2764</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<InvoicePanelCode/>
<InvoicePanelType/>
<PurchaserName/>
<PurchaserTaxNo/>
<PurchaserBank/>
<PurchaserAddressPhone/>
<PurchaserEmail/>
<PurchaserMobNo/>
<PurchaserFptAccount/>
<TotalAmount/>
<TotalTax/>
<AmountTax/>
<AmountDtn/>
<AppId/>
<SalesName/>
<SalesTaxNo/>
<SalesBank/>
<SalesAddressPhone/>
<InvoiceCreator/>
<InvoicePayee/>
<InvoiceChecker/>
<WxOpenid/>
<InvoiceIndustryType/>
<InvoiceSpcialType/>
<WxOrderId/>
<WxAppId/>
<ZfbUid/>
<GlobalOrderId/>
<Remark/>
</Body>
</Request>
XML;

$xmltx2765=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2765</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<SourceTxSN/>
</Body>
</Request>
XML;

$xmltx2766=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>2766</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <TxSn/> 
  </Body> 
</Request>
XML;

$xmltx2711=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2711</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<TemplateID/>
	<ContractInfos/>
	<Note/>
	<SignerInfos>
		<AccountType/>
		<Name/>
		<IdentificationType/>
		<IdentificationNumber/>
		<PhoneNumber/>
		<Email/>
		<LandlinePhone/>
		<Address/>
		<OperatorName/>
		<OperatorIdentType/>
		<OperatorIdentNumber/>
		<Signlocation/>
		<SMSFlag/>
	</SignerInfos>
</Body>
</Request>
XML;

$xmltx2712=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2712</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<SignType/>
	<ContractNo/>
	<Note/>
	<SignerInfo>
		<AccountType/>
		<Person>
		<Name/>
		<IdentificationType/>
		<IdentificationNumber/>
		<MobilePhone/>
		<Email/>
		<Address/>
		</Person>
		<Enterprise>
		<Name/>
		<IdentificationType/>
		<IdentificationNumber/>
		<MobilePhone/>
		<Email/>
		<Telephone/>
		<Transactor>
		<Name/>
		<IdentificationType/>
		<IdentificationNumber/>
		<Address/>
		</Transactor>
		</Enterprise>
		<SmsFlag/>
		<Signature/>
	</SignerInfo>
</Body>
</Request>
XML;

$xmltx2713=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2713</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>
</Request>
XML;

$xmltx2714=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2714</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>
</Request>
XML;

$xmltx2734=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2734</TxCode>
	<InstitutionID/>
</Head>
<Body>	
	<ApplyNo/>
	<UserID/>
	<PayWay/>
	<Category/>
	<ServicePhone/>
	<PlatformName/>
    <AttachInfoList>    
    </AttachInfoList>
</Body>
</Request>
XML;

$xmltx2735=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2735</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<ApplyNo/>
</Body>
</Request>
XML;

$xmltx2751=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2751</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<AccountNumber/>
</Body>
</Request>
XML;

$xmltx2752=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2752</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>
</Request>
XML;

$xmltx2770=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2770</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<TxSN/>
</Body>
</Request>
XML;

$xmltx2771=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2771</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<TxSN/>
	<UserID/>
	<BillMonth/>
</Body>
</Request>
XML;

$xmltx2776=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2776</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<TxSN/>
</Body>
</Request>
XML;

$xmltx2781=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>2781</TxCode>
</Head>
<Body>
	<ApplyNo/>
	<UserID/>
	<ContactName/>
	<ContactPhone/>
	<ContactIdNumber/>
	<AuthEntityType/>
	<CertificationType/>
	<LrIdCardFrontMediaID/>
	<LrIdCardBackMediaID/>
	<CertificateMediaID/>
	<CertificationLetterMediaID/>
</Body>
</Request>
XML;

$xmltx2782=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>2782</TxCode>
</Head>
<Body>
	<ApplyNo/>
	<UserID/>
</Body>
</Request>
XML;

$xmltx2783=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>2783</TxCode>
</Head>
<Body>
	<RevokeApplyNo/>
	<AuthApplyNo/>
	<UserID/>
</Body>
</Request>
XML;

$xmltx2811=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2811</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<AppID/>
		<PaymentWay/>
		<Amount/>
		<SettlementFlag/>
		<ExpirePeriod/>
		<Goods/>
		<DiscountAmount/>
		<ProductID/>
		<GoodsTag/>
		<Remark/>
		<SplitType/>
		<LimitPay/>
		<OperatorID/>
		<StoreID/>
		<TerminalID/>
		<TerminalMerchantID/>
		<PageUrl/>
		<PageUrlType/>
		<CancelPageUrl/>
		<InstallmentType/>
		<FeeMode/>
		<NumberOfInstallments/>
		<Extension/>
	</Body> 
</Request>
XML;

$xmltx2812=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2812</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<PaymentWay/>
		<PaymentScene/>
		<PreTxSN/>
		<AuthCode/>
		<Amount/>
		<SettlementFlag/>
		<ExpirePeriod/>
		<Goods/>
		<SplitType/>
		<GoodsTag/>
		<Remark/>
		<OperatorID/>
		<StoreID/>
		<TerminalID/>
		<TerminalMerchantID/>
		<Extension/>
		<SubAppID/>
	</Body> 
</Request>
XML;

$xmltx2813=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2813</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<PaymentWay/>
		<Amount/>
		<SettlementFlag/>
		<ExpirePeriod/>
		<Subject/>
		<Goods/>
		<OperatorID/>
		<StoreID/>
		<TerminalID/>
		<UserID/>
		<GoodsTag/>
		<SplitType/>
		<Remark/>
		<MiniAppFlag/>
		<LimitPay/>
		<TerminalMerchantID/>
		<AppID/>
		<PageUrl/>
	</Body> 
</Request>
XML;

$xmltx2814=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2814</TxCode>
	 
</Head>
<Body> 
	<InstitutionID/>
	<PaymentNo/>
	<PaymentWay/>
	<Amount/>
	<LimitPay/>
	<SettlementFlag/>
	<ExpirePeriod/>
	<AppID/>
	<Subject/>
	<Goods/>
	<OperatorID/>
	<StoreID/>
	<TerminalID/>
	<GoodsTag/>
	<NotificationURL/>
	<SplitType/>
	<Remark/>
	<ClientIP/>
	<BankID/>
	<TerminalMerchantID/> 
	<SourceBeforeJump/>
</Body>
</Request>
XML;

$xmltx2818=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2818</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<PaymentWay/>
		<Status/>
		<CardType/>
		<Amount/>
		<CouponAmount/>
		<SplitType/>
		<BankNotificationTime/>
		<PayerID/>
		<OperatorID/>
	  <StoreID/>
		<TerminalID/>
		<ResponseCode/>
		<ResponseMessage/>
	</Body> 
</Request>
XML;

$xmltx2820=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2820</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<SourceTxTime/>
	</Body> 
</Request>
XML;

$xmltx2830=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2830</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<TarGetTxCode/>
		<UserID/>
		<PreTxSN/>
		<OrderTime/>
		<PayType/>
		<StoreID/>
		<StoreName/>
		<TerminalID/>
		<RawData/>
		<SubAppID/>
	</Body> 
</Request>
XML;

$xmltx2831=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2831</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<SerialNumber/>
		<PaymentNo/>
		<SourceTxTime/>
		<Amount/>
		<SettlementFlag/>
		<Remark/>
	</Body> 
</Request>
XML;

$xmltx2832=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2832</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<SourceTxTime/>
	</Body> 
</Request>
XML;

$xmltx2838=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2838</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<SerialNumber/>
		<PaymentNo/>
		<Amount/>
		<Status/>
		<RefundTime/>
	</Body> 
</Request>
XML;

$xmltx2841=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2841</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<SourceTxTime/>
	</Body> 
</Request>
XML;

$xmltx2851=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2851</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<BusType/>
	<StartTime/>
	<ExpireTime/>
	<PlatformName/>
	<GoodsName/>
	<Amount/>
	<LimitPay/>
	<PayeeUserID/>
	<PayeeAccountNumber/>
	<PayerUserID/>
	<DeductionSettlementFlag/>
	<SplitType/>
	<PageUrl/>
	<SplitItems>
		<SplitBusinessType/>
		<Percentage/>
		<SplitAmount/>
		<SplitUserID/>
		<SplitAccountNumber/>
		<SplitBindingTxSN/>
		<SplitAccountType/>
		<SplitBankID/>
		<SplitBankAccountName/>
		<SplitBankAccountNumber/>
	</SplitItems>
</Body>
</Request>
XML;

$xmltx2856=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>2856</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>
</Request>
XML;

$xmltx2901=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2901</TxCode>
		<InstitutionID/>
	</Head>
	<Body>
	  <TxSNBinding/>
	  <ImageBestFileName/>
	  <ImageBestContent/>
	  <ImageEnvFileName/>
	  <ImageEnvContent/>
	</Body> 
</Request>
XML;

$xmltx2902=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2902</TxCode>
	</Head>
	<Body>
	  <InstitutionID/>
	</Body> 
</Request>
XML;

$xmltx2903=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2903</TxCode>
	</Head>
	<Body>
	  <InstitutionID/>
	  <FileID/>
	</Body> 
</Request>
XML;

$xmltx2904=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2904</TxCode>
	</Head>
	<Body>
	  <InstitutionID/>
	</Body> 
</Request>
XML;


$xmltx2911=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>2911</TxCode>
		<InstitutionID/>
	</Head>
	<Body>
	  <TxType/>
	  <MarketOrderNo/>
	  <BatchNo/>
  	  <SerialNumber/>
   	  <TxTime/>
	</Body> 
</Request>
XML;

$xmltx3111=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3111</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
<PageURL/>
<InvestmentType/>
</Body>
</Request>
XML;

$xmltx3112=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3112</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx3116=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3116</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentNo/>
</Body>
</Request>
XML;

$xmltx3118=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3118</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentTime/>
<Amount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx3119=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3119</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentTime/>
<InvestAmount/>
<Amount/>
<CouponNo/>
<CouponAmount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
<Status/>
</Body>
</Request>
XML;

$xmltx3120=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3120</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

$xmltx3131=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3131</TxCode>
<InstitutionID/>
</Head>
<Body>
<SerialNumber/>
<ProjectNo/>
<PaymentNo/>
<SettlementType/>
<AccountType/>
<SettlementUsage/>
<BankID/>
<BankAccountName/>
<BankAccountNumber/>
<BankBranchName/>
<BankProvince/>
<BankCity/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3136=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3136</TxCode>
<InstitutionID/>
</Head>
<Body>
<SerialNumber/>
</Body>
</Request>
XML;

$xmltx3137=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3137</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
<ProjectNo/>
<Amount/>
<PayerPaymentAccountType/>
<PayerPaymentAccountName/>
<PayerPaymentAccountNumber/>
<PayeeAccountType/>
<PayeeBankID/>
<PayeeBankAccountName/>
<PayeeBankAccountNumber/>
<PayeeBankBranchName/>
<PayeeBankProvince/>
<PayeeBankCity/>
<PayeePaymentAccountName/>
<PayeePaymentAccountNumber/>
<TransferUsage/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3138=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3138</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
</Body>
</Request>
XML;

$xmltx3141=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3141</TxCode>
</Head>
<Body>
<SerialNumber/>
<ProjectNo/>
<RepaymentType/>
<AccountType/>
<BankID/>
<BankAccountName/>
<BankAccountNumber/>
<BankProvince/>
<BankCity/>
<IdentificationType/>
<IdentificationNumber/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3146=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3146</TxCode>
</Head>
<Body>
<SerialNumber/>
</Body>
</Request>
XML;

$xmltx3151=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3151</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ProjectNo/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<Loaner>
<PaymentNo/>
<Amount/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
</Loaner>
</Body>
</Request>
XML;

$xmltx3156=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3156</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

$xmltx3161=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3161</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Item>
    <SettlementNo/>
    <ProjectNo/>
    <PaymentNo/>
    <SettlementType/>
    <AccountType/>
    <SettlementUsage/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankBranchName/>
    <BankProvince/>
    <BankCity/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
</Item>
</Body>
</Request>
XML;

$xmltx3162=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3162</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
</Body>
</Request>
XML;

$xmltx3211=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>3211</TxCode>
		<InstitutionID/>
	</Head>
	<Body>
		<ProjectNo/>
		<PaymentNo/>
		<Amount/>
		<ProjectName/>
		<ProjectURL/>
		<ProjectScale/>
		<ReturnRate/>
		<ProjectPeriod/>
		<StartDate/>
		<EndDate/>
		<LoanerPaymentAccountNumber/>
		<LoaneeAccountType/>
		<LoaneeBankID/>
		<LoaneeBankAccountName/>
		<LoaneeBankAccountNumber/>
		<LoaneePaymentAccountName/>
		<LoaneePaymentAccountNumber/>
		<GuaranteeAccountType/>
		<GuaranteeBankID/>
		<GuaranteeBankAccountName/>
		<GuaranteeBankAccountNumber/>
		<GuaranteePaymentAccountName/>
		<GuaranteePaymentAccountNumber/>
		<PageURL/>
		<PaymentWay/>
		<InvestmentType/>

	</Body> 
</Request>
XML;

$xmltx3212=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3212</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoanerPaymentAccountNumber/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<PaymentWay/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx3216=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3216</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
    <PaymentNo/>
  </Body>
</Request>
XML;

$xmltx3218=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3218</TxCode>
  </Head>
  <Body>
    <InstitutionID/>
    <PaymentNo/>
    <PaymentTime/>
    <Amount/>
    <LoanerPaymentAccountNumber/>
    <PaymentWay/>
  </Body> 
</Request>
XML;

$xmltx3219=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3219</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentTime/>
<InvestAmount/>
<Amount/>
<CouponNo/>
<CouponAmount/>
<LoanerPaymentAccountNumber/>
<PaymentWay/>
<Status/>
</Body>
</Request>
XML;

$xmltx3231=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3231</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  	<ProjectNo/>
    <PaymentNo/>
    <SettlementType/>
    <AccountType/>
    <SettlementUsage/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankBranchName/>
    <BankProvince/>
    <BankCity/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
  </Body> 
</Request>
XML;

$xmltx3236=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3236</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  </Body> 
</Request>
XML;

$xmltx3237=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3237</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
<ProjectNo/>
<Amount/>
<PayerPaymentAccountType/>
<PayerPaymentAccountName/>
<PayerPaymentAccountNumber/>
<PayeeAccountType/>
<PayeeBankID/>
<PayeeBankAccountName/>
<PayeeBankAccountNumber/>
<PayeeBankBranchName/>
<PayeeBankProvince/>
<PayeeBankCity/>
<PayeePaymentAccountName/>
<PayeePaymentAccountNumber/>
<TransferUsage/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3238=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3238</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
</Body>
</Request>
XML;

$xmltx3241=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3241</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  	<ProjectNo/>
    <RepaymentType/>
    <AccountType/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankProvince/>
    <BankCity/>
    <IdentificationType/>
    <IdentificationNumber/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
  </Body> 
</Request>
XML;

$xmltx3246=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3246</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  </Body> 
</Request>
XML;

$xmltx3251=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3251</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ProjectNo/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<Loaner>
<PaymentNo/>
<Amount/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
</Loaner>
</Body>
</Request>
XML;

$xmltx3256=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3256</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

$xmltx3261=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3261</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Item>
    <SettlementNo/>
    <ProjectNo/>
    <PaymentNo/>
    <SettlementType/>
    <AccountType/>
    <SettlementUsage/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankBranchName/>
    <BankProvince/>
    <BankCity/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
</Item>
</Body>
</Request>
XML;

$xmltx3262=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3262</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
</Body>
</Request>
XML;

$xmltx3291=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3291</TxCode>
</Head>
<Body>
<SerialNumber/>
<ProjectNo/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3292=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3292</TxCode>
</Head>
<Body>
<SerialNumber/>
</Body>
</Request>
XML;

$xmltx3310=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3310</TxCode>
<InstitutionID/>
</Head>
<Body>
<InstitutionPaymentAccountNumber/>
<BatchNo/>
<TotalAmount/>
<Item>
<CouponNo/>
<CouponName/>
<Amount/>
<UsingLimitAmount/>
<Deadline/>
<PaymentUserAccountNumber/>
<Remark/>
</Item>
</Body>
</Request>
XML;

$xmltx3312=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3312</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

$xmltx3315=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3315</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

$xmltx3601=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3601</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneeBankBranchName/>
<LoaneeBankProvince/>
<LoaneeBankCity/>
<LoaneeIdentificationType/>
<LoaneeIdentificationNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx3602=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3602</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
</Body>
</Request>
XML;

$xmltx3611=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3611</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<Remark/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx3612=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3612</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentNo/>
</Body>
</Request>
XML;

$xmltx3618=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3618</TxCode>
</Head>
<Body>
<InstitutionID/>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
<LoanerIdentificationNumber/>
<LoanerPhoneNumber/>
<Status/>
<PaymentTime/>
</Body>
</Request>
XML;

$xmltx3631=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3631</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementNo/>
<ProjectNo/>
<PaymentNo/>
<SettlementType/>
<SettlementUsage/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3632=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3632</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementNo/>
</Body>
</Request>
XML;

$xmltx3641=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3641</TxCode>
</Head>
<Body>
<RepaymentNo/>
<ProjectNo/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3642=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3642</TxCode>
</Head>
<Body>
<RepaymentNo/>
<RepaymentType/>
</Body>
</Request>
XML;

$xmltx3643=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3643</TxCode>
</Head>
<Body>
<RepaymentNo/>
<ProjectNo/>
<RepaymentType/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx3644=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3644</TxCode>
</Head>
<Body>
<RepaymentNo/>
<RepaymentType/>
</Body>
</Request>
XML;

$xmltx4011=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4011</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentAccountNumber/>
<PaymentAccountName/>
<Amount/>
<Remark/>
<NotificationURL/>
<BankID/>
<AccountType/>
</Body>
</Request>
XML;

$xmltx4018=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4018</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<PaymentTime/>
</Body>
</Request>
XML;

$xmltx4201=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4201</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegisterNo/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<UserType/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4202=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4202</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegisterNo/>
</Body>
</Request>
XML;

$xmltx4203=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4203</TxCode>
</Head>
<Body>
<InstitutionID/>
<RegisterNo/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<PaymentAccountNumber/>
<UserType/>
<OrganizationCode/>
<Status/>
</Body>
</Request>
XML;

$xmltx4204=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4204</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegisterNo/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<UserType/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4206=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4206</TxCode>
<InstitutionID/>
</Head>
<Body>
<Item>
 <RegisterNo/>
</Item>
</Body>
</Request>
XML;

$xmltx4210=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4210</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4211=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4211</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx4212=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4212</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx4218=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4218</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx4220=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4220</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4221=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4221</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx4222=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4222</TxCode>
<InstitutionID/>
</Head>
<Body>
<PayerPaymentAccountName/>
<PayerPaymentAccountNumber/>
<PayeePaymentAccountName/>
<PayeePaymentAccountNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4228=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4228</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx4231=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4231</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PhoneNumber/>
  	<UserName/>
  	<IdentificationNumber/>
  	<UserType/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4232=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4232</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PhoneNumber/>
		<UserType/>
  </Body> 
</Request>
XML;

$xmltx4233=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4233</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PhoneNumber/>
  	<UserName/>
  	<IdentificationNumber/>
  	<PaymentAccountNumber/>
		<UserType/>
		<OrganizationCode/>
		<Status/>
		<EBankCode/>
		<CardNBR/>
  </Body> 
</Request>
XML;

$xmltx4234=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4234</TxCode>
<InstitutionID/>
</Head>
<Body>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<UserType/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4235=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4235</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  </Body> 
</Request>
XML;

$xmltx4236=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4236</TxCode>
<InstitutionID/>
</Head>
<Body>
<Item>
 <RegisterNo/>
</Item>
</Body>
</Request>
XML;

$xmltx4237=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4237</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  </Body> 
</Request>
XML;

$xmltx4238=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4238</TxCode>
</Head>
<Body>
<InstitutionID/>
<Item>
<PaymentAccountNumber/>
</Item>
</Body>
</Request>
XML;

$xmltx4239=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4239</TxCode>
<InstitutionID/>
</Head>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx4241=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4241</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4242=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4242</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4243=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4243</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PaymentAccountNumber/>
  	<BankID/>
  	<BindingSystemNo/>
  	<BankAccountNumber/>
  	<Status/>
  </Body> 
</Request>
XML;

$xmltx4244=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4244</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  </Body> 
</Request>
XML;

$xmltx4245=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4245</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<BindingSystemNo/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4246=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4246</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<BindingSystemNo/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4247=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4247</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<BindingSystemNo/>
  	<PaymentAccountNumber/>
  	<BankID/>
  	<BankAccountNumber/>
  </Body> 
</Request>
XML;

$xmltx4251=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4251</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PaymentNo/>
  	<Amount/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4252=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4252</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentNo/>
  </Body> 
</Request>
XML;

$xmltx4253=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4253</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PaymentAccountNumber/>
  	<PaymentNo/>
  	<Amount/>
  	<PaymentTime/>
  </Body> 
</Request>
XML;

$xmltx4254=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4254</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PaymentNo/>
  	<Amount/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4255=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4255</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<TxSN/>
  	<Amount/>
  	<InstitutionFee/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4256=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4256</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<TxSN/>
  </Body> 
</Request>
XML;

$xmltx4257=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4257</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PaymentAccountNumber/>
  	<TxSN/>
  	<Amount/>
  	<InstitutionFee/>
  	<AcceptTime/>
  	<Status/>
  	<BankID/>
  	<BankAccountNumber/>
  </Body> 
</Request>
XML;

$xmltx4258=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4258</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<TxSN/>
  	<Amount/>
  	<InstitutionFee/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4261=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4261</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<AgreementNo/>
  	<PaymentAccountNumber/>
  	<PageURL/>
  </Body> 
</Request>
XML;

$xmltx4262=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4262</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<AgreementNo/>
  </Body> 
</Request>
XML;

$xmltx4263=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4263</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<AgreementNo/>
  	<PaymentAccountName/>
  	<PaymentAccountNumber/>
  	<IdentificationNumber/>
  	<IdentificationNumber/>
  	<PhoneNumber/>
  </Body> 
</Request>
XML;

$xmltx4264=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4264</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<AgreementNo/>
  </Body> 
</Request>
XML;

$xmltx4271=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4271</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4272=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4272</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4273=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4273</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

$xmltx4276=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4276</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

$xmltx4278=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4278</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<AgreementType/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

$xmltx4280=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4280</TxCode>
</Head>
<Body>
<InstitutionID/>
<Date/>
<PageNo/>
<CountPerPage/>
</Body>
</Request>
XML;

$xmltx4311=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4311</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentAccountNumber/>
<PaymentAccountName/>
<Amount/>
<Remark/>
<NotificationURL/>
<BankID/>
<AccountType/>
</Body>
</Request>
XML;

$xmltx4312=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4312</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4316=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4316</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<TxSN/>
<Amount/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4318=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4318</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<PaymentTime/>
</Body>
</Request>
XML;

$xmltx4320=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4320</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4321=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4321</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

$xmltx4322=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4322</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx4328=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4328</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

$xmltx4331=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4331</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4332=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4332</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4333=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4333</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

$xmltx4336=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4336</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

$xmltx4338=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4338</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<AgreementType/>
<Status/>
</Body>
</Request>
XML;

$xmltx4510=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4510</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx4512=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4512</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

$xmltx4514=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4514</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
<PaymentFlag/>
</Body>
</Request>
XML;

$xmltx4520=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4520</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<Remark/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4522=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4522</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<Remark/>
<Status/>
<BankTxTime/>
</Body>
</Request>
XML;

$xmltx4524=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4524</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
<PaymentNo/>
</Body>
</Request>
XML;

$xmltx4526=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4526</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<Amount/>
<Remark/>
<Payee>
	<PaymentAccountName/>
	<PaymentAccountNumber/>
</Payee>
<Payer>
	<BankID/>
	<AccountType/>
	<BankAccountName/>
	<BankAccountNumber/>
	<Province/>
	<City/>
</Payer>
</Body>
</Request>
XML;

$xmltx4528=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4528</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4530=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4530</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<PaymentFlag/>
<Payer>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payer>
<Payee>
<BankID/>
<AccountType/>
<BankAccountName/>
<BankAccountNumber/>
<PhoneNumber/>
<Province/>
<City/>
<BranchName/>
<BankNoByPBC/>
</Payee>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4532=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4532</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4534=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4534</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<PaymentFlag/>
<Payer>
 <PaymentAccountName/>
 <PaymentAccountNumber/>
</Payer>
</Body>
</Request>
XML;

$xmltx4536=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4536</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Payer>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payer>
<Payee>
<ItemNo/>
<Amount/>
<BankID/>
<AccountType/>
<BankAccountName/>
<BankAccountNumber/>
<PhoneNumber/>
<Note/>
</Payee>
</Body>
</Request>
XML;

$xmltx4538=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4538</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TxType/>
</Body>
</Request>
XML;

$xmltx4540=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4540</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<TxSN/>
		<PayerPaymentAccountName/>
		<PayerPaymentAccountNumber/>
		<PayeePaymentAccountName/>
		<PayeePaymentAccountNumber/>
		<Amount/>
		<Remark/>
  </Body> 
</Request>
XML;

$xmltx4542=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4542</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
		<TxSN/>
  </Body> 
</Request>
XML;

$xmltx4544=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4544</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Payer>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payer>
<Payee>
<ItemNo/>
<Amount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Note/>
</Payee>
</Body>
</Request>
XML;

$xmltx4546=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4546</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ItemNo/>
</Body>
</Request>
XML;

$xmltx4550=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4550</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ItemNo/>
</Body>
</Request>
XML;

$xmltx4551=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4551</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ItemNo/>
</Body>
</Request>
XML;

$xmltx4600=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4600</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserBusinessType/>
<UserID/>
<UserName/>
<CredentialType/>
<CredentialNumber/>
<PhoneNumber/>
<ImageCollectionTxSN/>
<MediaCollectedType/>
</Body>
</Request>
XML;

$xmltx4601=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4601</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<UserType/>
<ParentUserID/>
<AcceptanceConfirmType/>
<AccountLevel/>
<ImageCollectionTxSN/>
<BusinessType/>
<NoticeURL/>
<Individual>
	<PhoneNumber/>
	<UserName/>
	<CredentialType/>
	<CredentialNumber/>
	<IssDate/>
	<ExpiryDate/>
	<IndAddress/>
	<IndEmail/>
    <CredentialAddress/>
	<Occupation/>
</Individual>
<Corporation>
	<CorporationName/>
	<CorporationShort/>
	<CategoryType/>
	<CorEmail/>
	<CorAddress/>
	<Province/>
	<City/>
	<District/>
	<IndustryBelongType/>
	<Industry/>
	<Scale/>
	<BasicAcctNo/>
	<ApprovalNo/>
	<AuthCapital/>
	<BusinessScope/>
	<CorType/>
	<UnifiedSocialCreditCode/>
	<AllLicenceIssDate/>
	<AllLicenceExpiryDate/>
	<LegalPersonName/>
	<LegalCredentialType/>
	<LegalCredentialNumber/>
	<LegalPersonIssDate/>
	<LegalPersonExpiryDate/>
	<LegalPersonContactNumber/>
	<LegalPersonEmail/>
	<Shareholder/>
	<Controller/>
	<ConsigneeName/>
	<ConsigneeCredentialType/>
	<ConsigneeCredentialNumber/>
	<ConsigneeIssDate/>
	<ConsigneeExpiryDate/>
	<ConsigneeContactNumber/>
	<Beneficiary/>
	<ShareholderPart>
	    <ShareholderName/>
	    <ShCredentialType/>
	    <ShCredentialNumber/>
	    <ShPersonIssDate/>
		<ShPersonExpiryDate/>
	</ShareholderPart>
</Corporation>
<Retailer>
	<ManagerName/>
	<ManagerCredentialType/>
	<ManagerCredentialNumber/>
	<ManagerIssDate/>
	<ManagerExpiryDate/>
	<ManagerContactNumber/>
	<ManagerEmail/>
	<RetailerRegNumber/>
	<RetailerName/>
	<RetailerLicenseIssDate/>
	<RetailerLicenseExpiryDate/>
	<RetailerFormation/>
	<RetailerAddress/>
    <RetailerProvince/>
    <RetailerCity/>
    <RetailerDistrict/>
    <RetailerBusinessScope/>
    <ManagerCredentialAddress/>
	<ManagerOccupation/>
</Retailer>
<BankAccount>
	<BindingTxSN/>
	<BankID/>
	<BankAccountNumber/>
	<BankPhoneNumber/>
	<CNAPSCode/>
	<BranchName/>
	<BankProvince/>
	<BankCity/>
</BankAccount>
</Body>
</Request>
XML;



$xmltx4602=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4602</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegistrationNo/>
</Body>
</Request>
XML;

$xmltx4603=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4603</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegistrationNo/>
<PaymentAccountNumber/>
<EAccountNumber/>
<Status/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4604=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4604</TxCode>
<InstitutionID/>
</Head>
<Body>
<BusinessCode/>
<RegistrationNo/>
<CorporationName/>
<CorporationShort/>
<CorporationCHNName/>
<CategoryType/>
<Email/>
<Address/>
<Province/>
<City/>
<IndustryBelongType/>
<Industry/>
<Scale/>
<BasicAcctNo/>
<AuthCapital/>
<BusinessScope/>
<UnifiedSocialCreditCode/>
<AllLicenceExpiryDate/>
<BindingSystemNo/>
<BankID/>
<BranchName/>
<BankAccountNumber/>
<BankAccountName/>
<LegalName/>
<LegalIdentificationNumber/>
<LegalIssDate/>
<LegalExpiryDate/>
<LegalContactNumber/>
<LegalEmail/>
<SMSValidationCode/>
<AgreementFlag/>
</Body>
</Request>
XML;

$xmltx4605=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4605</TxCode>
</Head>
<Body>
<InstitutionID>
<TxSN>
<UserID>
<UserType>
<ParentUserID>
<ImageCollectionTxSN>
<NoticeURL>
<Individual>
<PhoneNumber>
<UserName>
<CredentialType>
<CredentialNumber>
</Individual>
<Corporation>
<CorporationName>
<CorporationShort>
<CorAddress>
<Province>
<City>
<District>
<CorType>
<UnifiedSocialCreditCode>
<LegalPersonName>
<LegalCredentialType>
<LegalCredentialNumber>
<LegalPersonContactNumber>
<ConsigneeName>
<ConsigneeCredentialType>
<ConsigneeCredentialNumber>
<ConsigneeIssDate>
<ConsigneeExpiryDate>
<ConsigneeContactNumber>
</Corporation>
<Retailer>
<ManagerName>
<ManagerCredentialType>
<ManagerCredentialNumber>
<ManagerIssDate>
<ManagerExpiryDate>
<ManagerContactNumber>
<RetailerRegNumber>
<RetailerName>
<RetailerFormation>
</Retailer>
</Body>
</Request>
XML;

$xmltx4606=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4606</TxCode>
</Head>
<Body>
<InstitutionID>
<TxSN>
<BusinessType>
<UserID>
<UserType>
<AcceptanceConfirmType>
<AccountLevel>
<NoticeURL>
<Individual>
<IssDate>
<ExpiryDate>
<IndAddress>
<IndEmail>
<CredentialAddress>
<Occupation>
</Individual>
<Corporation>
<CategoryType>
<CorEmail>
<IndustryBelongType>
<Industry>
<Scale>
<BasicAcctNo>
<ApprovalNo>
<AuthCapital>
<BusinessScope>
<AllLicenceIssDate>
<AllLicenceExpiryDate>
<LegalPersonIssDate>
<LegalPersonExpiryDate>
<LegalPersonEmail>
</Corporation>
<Retailer>
<ManagerEmail>
<RetailerLicenseIssDate>
<RetailerLicenseExpiryDate>
<RetailerAddress>
<RetailerProvince>
<RetailerCity>
<RetailerDistrict>
<RetailerBusinessScope>
<ManagerCredentialAddress>
<ManagerOccupation>
</Retailer>
<BankAccount>
<BindingTxSN>
<BankID>
<BankAccountNumber>
<BankPhoneNumber>
<CNAPSCode>
<BranchName>
<BankProvince>
<BankCity>
</BankAccount>
</Body>
</Request>
XML;

$xmltx4611=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4611</TxCode>
</Head>
<Body>
<InstitutionID/>
<BindingTxSN/>
<UserID/>
<PayeeUserID/>
<AcceptanceConfirmType/>
<BankCardType/>
<OperationFlag/>
<UpgradeTxSN/>
<CredentialType/>
<CredentialNumber/>
<BankID/>
<BankAccountType/>
<BankAccountName/>
<BankAccountNumber/>
<BankPhoneNumber/>
<CNAPSCode/>
<BranchName/>
<Province/>
<City/>
<ValidDate/>
<CVN2/>
<TransferChargeFlag/>
<NoticeURL/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4613=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4613</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<VerifyWay/>
<SMSCode/>
<CVN2/>
<ValidDate/>
<Amount/>
</Body>
</Request>
XML;

$xmltx4616=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4616</TxCode>
</Head>
<Body>
<InstitutionID/>
<SourceTxSN/>
<SourceTxCode/>
<OperationFlag/>
<UserType/>
</Body>
</Request>
XML;

$xmltx4618=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4618</TxCode>
</Head>
<Body>
<InstitutionID/>
<SourceTxSN/>
<SourceTxCode/>
<UserID/>
<UserType/>
<Status/>
<DBank>
	<EAccountName/>
	<EAccountNumber/>
</DBank>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4631=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4631</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<UserType/>
<PaymentNo/>
<Amount/>
<BankID/>
<Remark/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4632=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4632</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<PaymentNo/>
<BindingSystemNo/>
<BankID/>
<BankAccountNumber/>
<PhoneNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4633=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4633</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentNo/>
<SMSValidationCode/>
</Body>
</Request>
XML;

$xmltx4636=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4636</TxCode>
<InstitutionID/>
</Head>
<Body>
<SMSValidationCode/>
</Body>
</Request>
XML;

$xmltx4637=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4637</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<PaymentNo/>
<PaymentWay/>
<Amount/>
<PaymentTime/>
<Status/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4641=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4641</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<PaymentWay/>
<AcceptanceConfirmType/>
<Amount/>
<ExpirePeriod/>
<NoticeURL/>
<PageURL/>
<GoodsName/>
<PlatformName/>
<Remark/>
<ClientIP/>
<QuickPay>
	<BindingTxSN/>
</QuickPay>
<EBankPay>
	<BankID/>
	<BankAccountType/>
</EBankPay>
<QRPay>
	<QRPaymentType/>
	<QRPaymentWay/>
	<PaymentScene/>
	<PreTxSN/>
	<QRPayCode/>
	<OpenID/>
	<MerchantAppID/>
</QRPay>
<RedirectPay>
	<RedirectSource/>
	<PayWay/>
	<PayType/>
	<RedirectPayBankID/>
	<SubAppID/>
	<SubOpenID/>
</RedirectPay>
</Body>

</Request>
XML;

$xmltx4641_1=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4641</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<TxSN/>
<BindingSystemNo/>
<Amount/>
<UserType/>
<OrderAuthType/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4643=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4643</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<BindingTxSN/>
<AcceptanceConfirmType/>
<Amount/>
<ArrivalType/>
<Remark/>
<NoticeURL/>
</Body>
</Request>
XML;

$xmltx4643_1=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4643</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4644=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4644</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<AccountType/>
<TxSN/>
<Amount/>
<InstitutionFee/>
<AcceptTime/>
<Status/>
<BankID/>
<BankAccountNumber/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4645=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4645</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<ArrivalType/>
<PayerAccountType/>
<PayerUserID/>
<PayerAccountNumber/>
<PayeeAccountType/>
<PayeeUserID/>
<BindingTxSN/>
<BankID/>
<BankAccountType/>
<BankAccountName/>
<BankAccountNumber/>
<BranchName/>
<Province/>
<City/>
<BankNoByPBC/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4656=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4656</TxCode>
</Head>
<Body>
<InstitutionID/>
<SourceTxSN/>
<SourceTxCode/>
</Body>
</Request>
XML;

$xmltx4661=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4661</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentNo/>
<OrderNo/>
<OrderType/>
<OrderDesc/>
<SourceFreezeTxSN/>
<UnFreezeTxSN/>
<PayerPaymentAccountName/>
<PayerPaymentAccountNumber/>
<PayerAccountType/>
<Amount/>
<SettlementType/>
<PayeePaymentAccountName/>
<PayeePaymentAccountNumber/>
<PayeeAccountType/>
<OrderAuthType/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4663=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4663</TxCode>
</Head>
<Body>
<InstitutionID/>	
<UserID/>
<OperationType/>
<TxSN/>
<FreezeTxSN/>
<SourceTxSN/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4663_1=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4663</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentNo/>
</Body>
</Request>
XML;

$xmltx4664=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4664</TxCode>
</Head>
<Body>
<InstitutionID/>
<OperationType/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4665=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4665</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<WhiteListType/>
<Operation/>
<BankAccountName/>
<BankAccountNumber/>
<PayeeUserID/>
</Body>
</Request>
XML;

$xmltx4666=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4666</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4671=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4671</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PayerUserID/>
<PayerUserName/>
<PayeeInstitutionID/>
<PayeeUserID/>
<PayeeUserName/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4672=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4672</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4681=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4681</TxCode>
<InstitutionID/>
</Head>
<Body>
</Body>
</Request>
XML;

$xmltx4682=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4682</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<StartDate/>
<EndDate/>
<PageNO/>
<CountPerPage/>
</Body>
</Request>
XML;

$xmltx4691=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4691</TxCode>
</Head>
<Body>
<InstitutionID/>
<UserID/>
</Body>
</Request>
XML;

$xmltx4692=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4692</TxCode>
</Head>
<Body>
<InstitutionID/>
<UserID/>
<StartDate/>
<EndDate/>
<PageIndex/>
<PageSize/>
</Body>
</Request>
XML;

$xmltx4693=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4693</TxCode>
</Head>
<Body>
<InstitutionID/>
<UserID/>
</Body>
</Request>
XML;

$xmltx4694=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4694</TxCode>
</Head>
<Body>
<InstitutionID/>
<BankAccountNumber/>
</Body>
</Request>
XML;

$xmltx4695=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4695</TxCode>
</Head>
<Body>
<InstitutionID/>
<UserID/>
<AuthType/>
</Body>
</Request>
XML;

$xmltx4698=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4698</TxCode>
</Head>
<Body>
<TxSN/>
<InstitutionID/>
<BusinessType/>
<SourceTxSN/>
<SourceSplitTxSN/>
</Body>
</Request>
XML;

$xmltx4699=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4699</TxCode>
</Head>
<Body>
<InstitutionID/>
<BusinessType/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4701=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4701</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegistrationNo/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<BankID/>
<BankAccountNumber/>
<BranchName/>
<Province/>
<City/>
<IdType/>
<UserType/>
<TxSN/>
<SMSCode/>
</Body>
</Request>
XML;

$xmltx4702=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4702</TxCode>
<InstitutionID/>
</Head>
<Body>
</Body>
</Request>
XML;

$xmltx4703=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4703</TxCode>
</Head>
<Body>
<InstitutionID/>
<UserName/>
<UserType/>
<IdentificationNumber/>
<BankID/>
<BankAccountNumber/>
<BranchName/>
<Province/>
<City/>
<Status/>
<PhoneNumber/>
<EBankCode/>
<DepositAccountNumber/>
<BindingSystemNo/>
<ResponseCode/>
 <ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4704=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4704</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
</Body>
</Request>
XML;

$xmltx4705=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4705</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<Option/>
<PhoneNumber/>
<OldPhoneNumber/>
</Body>
</Request>
XML;

$xmltx4711=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4711</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserBusinessType/>
<PayerUserID/>
<UserID/>
<UserName/>
<CredentialType/>
<CredentialNumber/>
<PhoneNumber/>
<ImageCollectionTxSN/>
<BankAccountNumber/>
</Body>
</Request>
XML;

$xmltx4712=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4712</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserBusinessType/>
<PayerUserID/>
<UserID/>
<UserName/>
<CredentialType/>
<CredentialNumber/>
<BankAccountNumber/>
<BankPhoneNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4713=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4713</TxCode>
</Head>
<Body>
<InstitutionID/>
<SourceTxType/>
<SourceTxSN/>
</Body>
</Request>
XML;

$xmltx4715=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4715</TxCode>
</Head>
<Body>
<InstitutionID/>
<PayerUserID/>
</Body>
</Request>
XML;

$xmltx4711_1=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4711_1</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<TxType/>
<BankID/>
<PhoneNumber/>
<IdType/>
<IdentificationNumber/>
<BankAccountName/>
<BankAccountNumber/>
</Body>
</Request>
XML;

$xmltx4721=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4721</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<DepositAccountNumber/>
<SuccessPageURL/>
<FailPageURL/>
</Body>
</Request>
XML;

$xmltx4722=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4722</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4723=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4723</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<Status/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4731=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4731</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<BindingSystemNo/>
<BankID/>
<BankAccountName/>
<BankAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
<TxSN/>
<SMSCode/>
</Body>
</Request>
XML;

$xmltx4732=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4732</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4733=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4733</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<BindingSystemNo/>
<IsHsCard/>
</Body>
</Request>
XML;

$xmltx4734=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4734</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4736=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4736</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<BindingSystemNo/>
<PhoneNumber/>
<TxSN/>
<SMSCode/>
</Body>
</Request>
XML;

$xmltx4741=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4741</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<PaymentNo/>
<BankID/>
<Amount/>
<UserType/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4742=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4742</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<PaymentNo/>
<BindingSystemNo/>
<Amount/>
<TxSN/>
<SMSCode/>
</Body>
</Request>
XML;

$xmltx4743=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4743</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<PaymentNo/>
<PaymentWay/>
<Amount/>
<PaymentTime/>
<Status/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4744=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4744</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4751=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4751</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<TxSN/>
<Amount/>
<Fee/>
<RoutFlag/>
<RoutCode/>
<BankNoByPBC/>
<ForgetPwdURL/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4752=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4752</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4753=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4753</TxCode>
</Head>
<Body>
<InstitutionID/>
<DepositAccountNumber/>
<TxSN/>
<Amount/>
<Fee/>
<AcceptTime/>
<BankID/>
<BankAccountNumber/>
<ForgetPwdURL/>
<Status/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4761=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4761</TxCode>
</Head>
<Body>
<InstitutionID/>
<ProjectNo/> 
<ProjectName/>
<ProjectURL/> 
<ProjectScale/>
<ReturnRate/> 
<ProjectPeriod/>
<IntPayType/>
<IntPayDay/>
<EndDate/>
<LoaneeDepositAccountName/>
<LoaneeDepositAccountNumber/>
<GuaranteeDepositAccountName/>
<GuaranteeDepositAccountNumber/>
<NominalLoaneeDepositAccountName/>
<NominalLoaneeDepositAccountNumber/>
</Body>
</Request>
XML;

$xmltx4762=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4762</TxCode>
</Head>
<Body>
<InstitutionID/>
<ProjectNo/> 
</Body>
</Request>
XML;

$xmltx4771=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4771</TxCode>
</Head>
<Body>
<InstitutionID/>
<ProjectNo/> 
<PaymentNo/>
<Amount/>
<CouponFlag/>
<CouponAmount/>
<LoanerDepositAccountNumber/>
<Remark/>
<ForgetPwdURL/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4772=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4772</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4773=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4773</TxCode>
</Head>
<Body>
<InstitutionID/>
<ProjectNo/> 
<PaymentNo/>
<PaymentTime/>
<Amount/>
<LoanerDepositAccountName/>
<LoanerDepositAccountNumber/>
<Status/>
<AuthCode/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4774=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4774</TxCode>
</Head>
<Body>
<InstitutionID/>
<BatchNo/> 
<ProjectNo/>
</Body>
</Request>
XML;


$xmltx4781=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4781</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<DepositAccountNumber/>
<Amount/>
<ForgetPwdURL/>
<PageURL>
</Body>
</Request>
XML;

$xmltx4782=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4782</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4783=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4783</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<DepositAccountName/>
<DepositAccountNumber/>
<Amount/>
<Status/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4784=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4784</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<DepositAccountNumber/>
</Body>
</Request>
XML;

$xmltx4791=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4791</TxCode>
</Head>
<Body>
<InstitutionID/>
<ProjectNo/> 
<TransferNo/>
<PaymentNo/>
<RecipientDepositAccountNumber/>
<AvailableBalance/>
<Amount/>
<TransferPrice/>
<IntDate/>
<ReturnRate/> 
<Fee/>
<TransferDepositAccountNumber/>
<ForgetPwdURL/>
<PageURL/>
</Body>
</Request>
XML;

$xmltx4792=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4792</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4793=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4793</TxCode>
</Head>
<Body>
<InstitutionID/>
<TransferNo/>
<PaymentNo/>
<RecipientDepositAccountNumber/>
<TransferDepositAccountNumber/>
<Amount/>
<TransferPrice/>
<RemainBalance/> 
<Fee/>
<AuthCode/>
<Status/>
<ResponseCode/>
<ResponseMessage/>
</Body>
</Request>
XML;

$xmltx4801=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4801</TxCode>
</Head>
<Body>
<InstitutionID/>
<SettlementBatchNo/>
<LoaneeType/>
<ProjectNo/>
<TotalAmount/>
<TotalCount/>
<TotalFee/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4802=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4802</TxCode>
</Head>
<Body>
<InstitutionID/>
<SettlementBatchNo/>
</Body>
</Request>
XML;

$xmltx4803=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4803</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
<ProjectNo/> 
<RepaymentType/>
<Amount/>
<OperationType/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4804=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4804</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
<ProjectNo/> 
</Body>
</Request>
XML;

$xmltx4811=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4811</TxCode>
</Head>
<Body>
<InstitutionID/>
<SettlementBatchNo/>
<ProjectNo/>
<TotalAmount/>
<TotalCount/>
<TotalFee/>
<Remark/>
<RepaymentType/>
</Body>
</Request>
XML;

$xmltx4812=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4812</TxCode>
</Head>
<Body>
<InstitutionID/>
<SettlementBatchNo/>
</Body>
</Request>
XML;

$xmltx4813=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4813</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<FunctionType/>
<PayerDepositAccountNumber/>
<PayeeDepositAccountNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

$xmltx4814=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4814</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx4901=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4901</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<CustomerType/>
<CustomerName/>
<IdType/>
<IdNumber/>
<IdIssueDate/>
<IdExpireDate/>
<MaritalStatus/>
<HighestEduLevel/>
<Province/>
<Address/>
<PhoneNumber/>
<CompanyName/>
</Body>
</Request>
XML;

$xmltx4902=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4902</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<CorpName/>
<InstitutionType/>
<InstitutionSubType/>
<UnifiedSocialCreditCode/>
<CertExpireDate/>
<CorpEstablishDate/>
<ProvinceCode/>
<Address/>
<RegisteredCapital/>
<RegisteredCapitalCurrency/>
<CollectedCapital/>
<CollectedCapitalCurrency/>
<LastYearSale/>
<TotalAsset/>
<EmployeeNumber/>
<BusinessRange/>
<Managers>
<IdType/>
<IdNumber/>
<Name/>
<PositionName/>
<PhoneNumber/>
</Managers>
</Body>
</Request>
XML;

$xmltx4903=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4903</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<IndAuthInfoTxSN/>
<CorpAuthInfoTxSN/>
<BusinessCategory/>
<CorpEntityFlag/>
<CorpName/>
<CorpIdNumber/>
<ImageCollectionTxSN/>
<LegalManagers>
<RoleType/>
<Name/>
<IdNumber/>
<PhoneNumber/>
<BankCardNumber/>
</LegalManagers>
</Body>
</Request>
XML;

$xmltx4906=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4906</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4911=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4911</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<Stage/>
<RiskParameter>
<XgeDealerName/>
<XgeDealerAddress/>
<XgeDealerAddressProvince/>
<XgeDealerAddressCity/>
<XgeDealerJoiningDate/>
<XgeDealerJoiningDurationDays/>
<XgeDealerBusinessLicenseCode/>
<XgeDealerBusinessLicenseRegDate/>
<XgeDealerBusinessLicenseBeginDate/>
<XgeDealerBusinessLicenseEndDate/>
<XgeDealerBusinessLicenseRegMonths/>
<XgeDealerBusinessLicenseValid/>
<XgeTotalTradeAmt1M/>
<XgeTotalTradeAmt3M/>
<XgeTotalTradeAmt6M/>
<XgeTotalTradeAmt12M/>
<XgeTotalTradeAmt24M/>
<XgeTotalTradeCnt1M/>
<XgeTotalTradeCnt3M/>
<XgeTotalTradeCnt6M/>
<XgeTotalTradeCnt12M/>
<XgeTotalTradeCnt24M/>
<XgeAvgTradeAmt1M/>
<XgeAvgTradeAmt3M/>
<XgeAvgTradeAmt6M/>
<XgeAvgTradeAmt12M/>
<XgeAvgTradeAmt24M/>
<XgeLastSuccessTradeMonths/>
<XgeOverallScore/>
<XgeDealerName/>
<XgeDealerJoiningDurationDays/>
<XgeOrderAmount/>
<XgeDealerBusinessLicenseValid/>
<XgeTotalTradeAmt1M/>
<XgeTotalTradeAmt3M/>
<XgeTotalTradeAmt6M/>
<XgeTotalTradeAmt12M/>
<XgeTotalTradeAmt24M/>
<XgeTotalTradeCnt1M/>
<XgeTotalTradeCnt3M/>
<XgeTotalTradeCnt6M/>
<XgeTotalTradeCnt12M/>
<XgeTotalTradeCnt24M/>
<XgeOverallScore/>
</RiskParameter>
</Body>
</Request>
XML;

$xmltx4912=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4912</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<UserID/>
<AuthApplyTxSN/>
<CustomerName/>
<CreditLimit/>
<MainCollateralType/>
<LoanTerm/>
<ApplyDate/>
<RevolvingFlag/>
<LoanStartDate/>
<LoanMatureDate/>
</Body>
</Request>
XML;

$xmltx4916=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4916</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4931=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4931</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<RepaymentType/>
<RepaymentDate/>
<RepaymentAmount/>
<RepaymentPrincipal/>
</Body>
</Request>
XML;

$xmltx4932=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4932</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentTxSN/>
<RepaymentType/>
<RepaymentDate/>
<RepaymentAmount/>
<RepaymentPrincipal/>
</Body>
</Request>
XML;

$xmltx4934=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4934</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx4936=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4936</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx5011=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5011</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<OrderNo/>
<TerminalUserID/>
<PayerUserID/>
<PayeeUserID/>
<PayeeAccountNumber/>
<PaymentWay/>
<Amount/>
<ExpirePeriod/>
<PageURL/>
<GoodsTag/>
<GoodsName/>
<PlatformName/>
<ClientIP/>
<HasSubsequentSplit/>
<NoticeURL/>
<Remark/>
<DeductionSettlementFlag/>
<Extension/>
</Body>
</Request>
XML;

$xmltx5012=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5012</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<OrderNo/>
<TerminalUserID/>
<PayerUserID/>
<PayeeUserID/>
<PayeeAccountNumber/>
<Amount/>
<CreditFlag/>
<PaymentMode/>
<PaymentScene/>
<PaymentWay/>
<QRPaymentType/>
<BankID/>
<InterestType/>
<ExpirePeriod/>
<PageURL/>
<DeductionSettlementFlag/>
<GoodsName/>
<Platformname/>
<HasSubsequentSplit/>
<CancelPayRedirectPageURL/>
<RedirectPageURL/>
<NoticeURL/>
<ClientIP/>
<Extension/>
<Remark/>
</Body>
</Request>
XML;

$xmltx5014=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5014</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentTxSN/>
<CloseType/>
</Body>
</Request>
XML;

$xmltx5015=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5015</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<CVN2/>
<ValidateDate/>
<SmsValidationCode/>
</Body>
</Request>
XML;

$xmltx5016=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5016</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<SourceTxTime/>
</Body>
</Request>
XML;

$xmltx5021=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5021</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentTxSN/>
<SourceTxTime/>
<RefundWay/>
<Amount/>
<CancelAmount/>
<NoticeURL/>
<Remark/>
</Body>
</Request>
XML;

$xmltx5026=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5026</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx5031=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5031</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentTxSN/>
<RemainFundsProcess/>
<NoticeURL/>
</Body>
</Request>
XML;

$xmltx5036=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5036</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx5111=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5111</TxCode>
</Head>
<Body>
<InstitutionID/>
<PayeeCode/>
<Name/>
<Address/>
<Type/>
<MerchantType/>
<BankBicCode/>
<BankName/>
<BankAddress/>
<AccountNumber/>
<Currency/>
<CorrespondentBankName/>
<CorrespondentBankAddress/>
<PayeeBankAccountNumber/>
<LegalName/>
<LegalIdentificationNumber/>
<CountryCode/>
<OrganizationCode/>
<BusinessLicenceNo/>
<BasicAccountLicenceNo/>
</Body>
</Request>
XML;

$xmltx5116=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5116</TxCode>
</Head>
<Body>
<InstitutionID/>
<PayeeCode/>
</Body>
</Request>
XML;

$xmltx5121=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5121</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
<NameENG/>
<AddressENG/>
<BankID/>
<AccountName/>
<AccountNumber/>
<PhoneNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PayeeCode/>
<PayeeCurrency/>
<PayeeAmount/>
<TradeCode/>
<TransRemark/>
<Usage/>
<CommodityInformation/>
<BusinessType/>
<ResidentFlag/>
<VerificationFlag/>
<PayType/>
<Reporter/>
<ReporterPhone/>
<LatestShippingDate/>
<ContractNo/>
<InvoiceNo/>
<SafeRecordNumber/>
<CustomId/>
<JWJNFlag/>
<Remark/>
<NotificationURL/>
</Body>
</Request>
XML;

$xmltx5126=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5126</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
</Body>
</Request>
XML;

$xmltx5128=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5128</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
<PayeeCurrency/>
<PayeeAmount/>
<FXBuyingRate/>
<Currency/>
<Amount/>
<Fee/>
<Status/>
<BankNotificationTime/>
</Body>
</Request>
XML;

$xmltx6011=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6011</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<SourceTxSN/>
<SourceOrderNo/>
<Amount/>
<OrderInfo/>
<OperatorID/>
<StoreID/>
<TerminalID/>
<PrintInfo/>
<Remark/>
</Body>
</Request>
XML;

$xmltx6012=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6012</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<OrderNo/>
<Amount/>
<OrderInfo/>
<PrintInfo/>
<Remark/>
</Body>
</Request>
XML;

$xmltx6041=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6041</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<SourceTxSN/>
<SourceOrderNo/>
<Amount/>
<OrderInfo/>
<OperatorID/>
<StoreID/>
<TerminalID/>
<PrintInfo/>
<Remark/>
</Body>
</Request>
XML;

$xmltx6050=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6050</TxCode>
<InstitutionID/>
</Head>
<Body>
<OrderNo/>
</Body>
</Request>
XML;

$xmltx6051=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6051</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

$xmltx6052=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6052</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<SourceTxSN/>
</Body>
</Request>
XML;

$xmltx6053=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6053</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

$xmltx6061=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6061</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<Status/>
<Amount/>
<TxType/>
<O2OorderNo/>
<PayType/>
<ReferNumber/>
<AccountNumber/>
<BankTime/>
<MerchantID/>
<TerminalID/>
<BatchNo/>
<SystemTraceNo/>
<Authcode/>
<ScanOrderID/>
</Body>
</Request>
XML;

$xmltx6062=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6062</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<SourceTxSN/>
<Status/>
<PayType/>
<ReferNumber/>
<AccountNumber/>
<BankTime/>
<MerchantID/>
<TerminalID/>
<BatchNo/>
<SystemTraceNo/>
<Authcode/>
<ScanOrderID/>
</Body>
</Request>
XML;

$xmltx6063=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6063</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<SourceTxSN/>
<Status/>
<Amount/>
<ReferNumber/>
<AccountNumber/>
<BankTime/>
<MerchantID/>
<TerminalID/>
<BatchNo/>
<SystemTraceNo/>
<Authcode/>
<ScanOrderID/>
</Body>
</Request>
XML;

$xmltx6071=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6071</TxCode>
<InstitutionID/>
</Head>
<Body>
<InstitutionID/>
<Date/>
</Body>
</Request>
XML;

$xmltx6072=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6072</TxCode>
</Head>
<Body>
<InstitutionID/>
<Date/>
</Body>
</Request>
XML;

$xmltx6073=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6073</TxCode>
</Head>
<Body>
<InstitutionID/>
<Date/>
</Body>
</Request>
XML;


$xmltx6101=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6101</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<FundID/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
</Body>
</Request>
XML;

$xmltx6102=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6102</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx6111=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6111</TxCode>
</Head>
<Body>
<InstitutionID/>
<BindingSN/>
<PaymentAccountNumber/>
<BankID/>
<BankAccountNumber/>
<PhoneNumber/>
<VerifyCode/>
</Body>
</Request>
XML;

$xmltx6112=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6112</TxCode>
</Head>
<Body>
<InstitutionID/>
<BindingSN/>
</Body>
</Request>
XML;

$xmltx6116=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6116</TxCode>
</Head>
<Body>
<InstitutionID/>
<UnBindingSN/>
<BindingSN/>
</Body>
</Request>
XML;

$xmltx6121=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6121</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentAccountNumber/>
<BindingSN/>
<Amount/>
<Remark/>
<VerifyCode/>
<FundID/>
</Body>
</Request>
XML;

$xmltx6122=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6122</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx6123=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6123</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<Status/>
<Amount/>
<PaymentAccountNumber/>
<BindingSN/>
<ApplyTime/>
</Body>
</Request>
XML;

$xmltx6124=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6124</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<Amount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Note/>
<SettlementFlag/>
<ChargeSN/>
</Body>
</Request>
XML;

$xmltx6125=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6125</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx6126=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6126</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentAccountNumber/>
<FundID/>
<BindingSN/>
<Amount/>
<Remark/>
<VerifyCode/>
</Body>
</Request>
XML;

$xmltx6127=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6127</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

$xmltx6131=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6131</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

$xmltx6132=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6132</TxCode>
</Head>
<Body>
<InstitutionID/>
<NetDate/>
</Body>
</Request>
XML;

$xmltx6133=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6133</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

$xmltx6134=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6134</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

$xmltx6135=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6135</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

$xmltx7001=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7001</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<AppID/>
<UserID/>
<AccountName/>
<AccountNumber/>
<IdentificationNumber/>
<SecretFreeAmount/>
<MaxAmount/>
<IdentificationType/>
<PhoneNumber/>
<CVN2/>
<ExpiredDate/>
</Body>
</Request>
XML;

$xmltx7002=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7002</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<AppID/>
<UserID/>
<VerificationCode/>
</Body>
</Request>
XML;

$xmltx7011=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7011</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<AppID/>
<DeviceID/>
<UserID/>
<DeviceType/>
<SourceIP/>
<QrCode/>
</Body>
</Request>
XML;

$xmltx7014=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7014</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<AppID/>
<DeviceID/>
<UserID/>
<DeviceType/>
<SourceIP/>
<BindingToken/>
<TxnNo/>
<Amount/>
<PayerComments/>
<InfoReserved/>
</Body>
</Request>
XML;

$xmltx7611=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7611</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<Amount/>
<SettlementFlag/>
<Usage/>
<Remark/>
<PageURL/>
<BackgroundURL/>
<BankID/>
<AccountType/>
<TraceNo/>
<TransTime/>
<MerchantID/>
<MerchantName/>
</Body>
</Request>
XML;

$xmltx7618=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7618</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<Amount/>
<Status/>
<BankNotificationTime/>
<TraceNo/>
<TransTime/>
<MerchantID/>
<MerchantName/>
</Body>
</Request>
XML;

$xmltx7620=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7620</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
</Body>
</Request>
XML;

$xmltx7621=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7621</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
</Body>
</Request>
XML;

$xmltx7701=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>7701</TxCode>
</Head>
<Body>
<ApplyNo/>
<LrName/>
<LrCountry/>
<LrIDType/>
<LrIDNumber/>
<LrStartDate/>
<LrEndDate/>
<LrContact/>
<InstitutionName/>
<Uscc/>
<BlicStartDate/>
<BlicEndDate/>
<InsAddress/>
<EstablishDate/>
<RegCapital/>
<Currency/>
<RegCountry/>
<MerchantCategory/>
<InsContactAddress/>
<InsURL/>
<InsSiteName/>
<InsAppName/>
<InsWeChat/>
<InsWeChatApp/>
<OperateScope/>
<BeneficiaryName/>
<BeneficiaryCountry/>
<BeneficiaryDuty/>
<BeneficiaryIdType/>
<BeneficiaryIdNumber/>
<BeneficiaryIdBegin/>
<BeneficiaryIdEnd/>
<BeneficiaryPhoneNumber/>
<BeneficiaryAddr/>
<AccountName/>
<AccountNumber/>
<BankID/>
<BankAddress/>
<BankBranchName/>
<AgentName/>
<AgentCountry/>
<AgentIdType/>
<AgentIdNumber/>
<AgentIdBegin/>
<AgentIdEnd/>
<AgentPhoneNumber/>
<AgentEmail/>
<ServiceName/>
<ServiceMail/>
<ServicePhoneNumber/>
<FeeNumber/>
<SettlementFlag/>
<NotificationURL/>
<BusinessScene/>
<BusinessFunctionID/>
<BusinessFunction/>
</Body>
</Request>
XML;

$xmltx7702=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>7702</TxCode>
	<InstitutionID/>
</Head>
<Body>
<ApplyNo/>
<IndividualName/>
<Uscc/>
<OperatorLocation/> 
<Operator/> 
<OperatorIdType/> 
<OperatorIdNumber/> 
<OperatorStartDate/> 
<OperatorEndDate/> 
<OperatorPhoneNumber/>
<AccountNumber/>
<PhoneNumber/>
<EstablishDate/>
<OperateScope/>
<MerchantCategory/>
<AgentName/>
<AgentCountry/>
<AgentIdType/>
<AgentIdNumber/>
<AgentIdBegin/>
<AgentIdEnd/>
<AgentPhoneNumber/>
<AgentEmail/>
<ServiceName/>
<ServiceMail/>
<ServicePhoneNumber/>
<FeeNumber/>
<SettlementFlag/>
<NotificationURL/>
<BusinessScene/>
<BusinessFunctionID/>
<BusinessFunction/>
<BankAddress/>
<BankBranchName/>
</Body>
</Request>
XML;

$xmltx7703=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>7703</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<ApplyNo/>
	<UserID/>
	<ProtocolNumber/>
	<ProtocolSignerType/> 
	<AgentPhoneNumber/> 
	<AgentName/> 
	<AgentIDNumber/> 
	<ProtocolSignPhoneNumber/> 
	<ImmediatelySign/> 
	<NoticeURL/> 
</Body>
</Request>
XML;

$xmltx7704=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>7704</TxCode>
	<InstitutionID/>
</Head>
<Body>
	<ApplyNo/>
</Body>
</Request>
XML;

$xmltx8000=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8000</TxCode>
	<InstitutionID/>
</Head>
</Request>
XML;

$xmltx8001=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8001</TxCode>
	<InstitutionID/>
</Head>
<Body>
<TxSN/>
<BusinessType/>
<BankID/>
<IdentificationFrontImage/>
<IdentificationBackImage/>
</Body>
</Request>
XML;

$xmltx8002=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8002</TxCode>
	<InstitutionID/>
</Head>
<Body>
<TxSN/>
<InstitutionID/>
<BankID/>
<BindingAccountNumber/>
<AccountName/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<ValidDateStart/>
<Nation/>
<Occupation/>
<Address/>
<PhotoCopyTxSN/>
</Body>
</Request>
XML;

$xmltx8003=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8003</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<MessageCode/>
	<AccountPassword/>
</Body>	
</Request>
XML;

$xmltx8004=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8004</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>	
</Request>
XML;

$xmltx8005=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8005</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BankAccountNumber/>
	<AccountName/>
	<IdentificationNumber/>
	<PhoneNumber/>
	<AccountPassword/>
</Body>	
</Request>
XML;

$xmltx8011=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8011</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<BindingAccountNumber/>
	<BankAccountNumber/>
	<AccountName/>
	<IdentificationNumber/>
	<PhoneNumber/>
	<Amount/>
</Body>	
</Request>
XML;

$xmltx8012=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8012</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>	
</Request>
XML;

$xmltx8013=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8013</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<BindingAccountNumber/>
	<BankAccountNumber/>
	<AccountName/>
	<IdentificationNumber/>
	<PhoneNumber/>
	<Amount/>
</Body>	
</Request>
XML;

$xmltx8014=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8014</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>	
</Request>
XML;

$xmltx9091=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>9091</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
	<SourceTxSN/>
	<Amount/>
	<SourceAccountNumber/>
	<SourceAccountName/>
	<FundOutFailureProcessTxNo/>
	<AccountType/>
	<BankID/>
	<AccountNumber/>
	<AccountName/>
	<Province/>
	<City/>
	<BranchName/>
	<SnapCode/>
</Body>	
</Request>
XML;

$xmltx9092=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>9092</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<TxSN/>
</Body>	
</Request>
XML;

$xmltx9999=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>9999</TxCode>
</Head>
<Body>
	<InstitutionID/>
</Body>	
</Request>
XML;

?>
