<?php

require_once('includes/Account.php');
require_once('includes/Person.php');
require_once('includes/Transaction.php');
require('partials/header.php');

/**
 * 👶🏻👶🏼👶🏽
 */
$johan = new Person("Johan", "Nordström");
$pelle = new Person("Pelle", "Med-Svans");
$mr_beast = new Person("Mr", "Beast");
$linus = new Person("Linus", "Sebastian");

/**
 * Johans konto
 */
$johans_konto = new Account('1234-56,789,012-3', $johan, 500);
$johans_konto->withdraw(49, 'Caffe Latte');

$johans_sparkonto = new Account('1234-67,890,123-4', $johan, 1000);
$johans_sparkonto->deposit(500, 'Månadssparande', '2021-11-25');
$johans_sparkonto->deposit(500, 'Månadssparande', '2021-12-25');
$johans_sparkonto->deposit(500, 'Månadssparande');

/**
 * Pelles konto
 */
$pelles_konto = new Account('2345-67,890,123-4', $pelle);
$pelles_konto->deposit(100, 'Sålde iPhone till "sista priset kompis" på Blocket', '2021-12-24');
$pelles_konto->deposit(50, 'Återbetalning. H&M', '2022-01-20');
$pelles_konto->withdraw(79.99, 'Lunch');

/**
 * Mr Beast's konto
 */
$beasts_konto = new Account('1337-1337', $mr_beast, 1337000);
$beasts_konto->withdraw(1337000, 'LOL', '2022-01-01');
$beasts_konto->deposit(50);

echo "<pre>";

echo "<h3>Johans konto</h3>";

echo "johans_konto->owner === johans_sparkonto->owner? ";
var_dump($johans_konto->getOwner() === $johans_sparkonto->getOwner());
echo "<br>";

echo "johans_konto->owner === pelles_konto->owner? ";
var_dump($johans_konto->getOwner() === $pelles_konto->getOwner());
echo "<br>";

var_dump($johans_konto);
var_dump($johans_sparkonto);

echo "<h3>Pelles konto</h3>";
var_dump($pelles_konto);

echo "<h3>Beasts konto</h3>";
var_dump($beasts_konto);

echo "</pre>";

$accounts = [
	$johans_konto,  // object(Account)
	$johans_sparkonto,  // object(Account)
	$pelles_konto,  // object(Account)
	$beasts_konto   // object(Account)
];

echo "<h1>Kundfientlig bank nr 1</h1>";
foreach ($accounts as $account) {
	echo "<h2>{$account->getAccountNumber()}</h2>";
	echo "<h3>Owner: {$account->getOwner()->getFullName()}</h3>";
	echo "<p><strong>Balance:</strong> {$account->getBalance()}</p>";

	echo "<h4>Transactions</h4>";
	echo "<table class=\"table\">";

	echo "<thead>";
	echo "  <th>Date</th>";
	echo "  <th>Amount</th>";
	echo "  <th>Description</th>";
	echo "</thead>";

	echo "<tbody>";
	foreach ($account->getTransactions() as $transaction) {
		echo "<tr>";
		echo "  <td>{$transaction->getDate()}</td>";
		echo "  <td>{$transaction->getAmount()} kr</td>";
		echo "  <td>{$transaction->getDescription()}</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";

	echo "<hr />";
}

require('partials/footer.php');
