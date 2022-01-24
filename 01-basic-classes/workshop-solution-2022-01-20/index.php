<?php

require('includes/Account.php');
require('partials/header.php');

/**
 * Johans konto
 */
$johans_konto = new Account('1234-56,789,012-3', 'Johan Nordström', 500);
$johans_konto->withdraw(49, 'Caffe Latte');

/**
 * Pelles konto
 */
$pelles_konto = new Account('2345-67,890,123-4', 'Pelle Svanslös');
$pelles_konto->deposit(100, 'Sålde iPhone till "sista priset kompis" på Blocket');
$pelles_konto->deposit(50, 'Återbetalning. H&M');
$pelles_konto->withdraw(79.99, 'Lunch');

echo "<pre>";
var_dump($pelles_konto);
echo "</pre>";

/**
 * Mr Beast's konto
 */
$beasts_konto = new Account('1337-1337', 'Mr Beast', 1337000);
$beasts_konto->withdraw(1337000, 'LOL');

$accounts = [
	$johans_konto,  // object(Account)
	$pelles_konto,  // object(Account)
	$beasts_konto   // object(Account)
];

echo "<h1>Kundfientlig bank nr 1</h1>";
foreach ($accounts as $account) {
	echo "<h2>{$account->getAccountNumber()}</h2>";
	echo "<h3>Owner: {$account->getOwner()}</h3>";
	echo "<p><strong>Balance:</strong> {$account->getBalance()}</p>";

	echo "<h4>Transactions</h4>";
	echo "<table class=\"table\">";

	echo "<thead>";
	echo "  <th>Amount</th>";
	echo "  <th>Description</th>";
	echo "</thead>";

	echo "<tbody>";
	foreach ($account->getTransactions() as $transaction) {
		echo "<tr>";
		echo "  <td>{$transaction['amount']} kr</td>";
		echo "  <td>{$transaction['description']}</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";

	echo "<hr />";
}

require('partials/footer.php');
