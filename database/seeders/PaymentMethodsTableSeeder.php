<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cash On Delivery',
                'slug' => 'cash',
                'instruction' => 'This is the method of payment upon receipt',
                'secret_key' => NULL,
                'public_key' => NULL,
                'hash_key' => NULL,
                'is_active' => 1,
                'is_cash' => 1,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Stripe',
                'slug' => 'stripe',
                'instruction' => NULL,
                'secret_key' => 'sk_test_51H72HqAj5RlJyFb42rVtCc2crW3FxfKYhKnm1Cg9AIR3bDYMBhvZktRCHcZnmrIdEFCt580RBh9dUESlQiuUmHYP00qdNA5HTk',
                'public_key' => 'pk_test_51H72HqAj5RlJyFb4IT1DwAN61mqzEKwUPDvqf6O4lWtWSFUhGws3ZPdOZwfe39E3mNRNT33Zqn6Y70VDnxI2sKJs00H5xfGQif',
                'hash_key' => NULL,
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:31',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Paystack',
                'slug' => 'paystack',
                'instruction' => NULL,
                'secret_key' => 'sk_test_6b0e65eda81cbf0a9d4d80db2d1d2859b2639f89',
                'public_key' => 'pk_test_8b36d9ab6b5b51683b2eeba68db3baebd0356eb8',
                'hash_key' => NULL,
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:27',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'RazorPay',
                'slug' => 'razorpay',
                'instruction' => NULL,
                'secret_key' => 'UzT2ScT5iKRnlQwq2odNPzXI',
                'public_key' => 'rzp_test_hNMNePIhEgHgP7',
                'hash_key' => 'whsec_KPrzeWUZJbDa4ux6OOZ6TSgwETwJ5lCX',
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Flutterwave',
                'slug' => 'flutterwave',
                'instruction' => NULL,
                'secret_key' => 'FLWSECK_TEST-66e0a213eea4a4710f2e027a678a64ee-X',
                'public_key' => 'FLWPUBK_TEST-77a19b7c22b4940d5f600a31d65cbfc3-X',
                'hash_key' => 'FLWSECK_TEST95206dccf3cd',
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:21',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Offline Payment',
                'slug' => 'offline',
                'instruction' => 'Send payment thru remittance.
',
                'secret_key' => '',
                'public_key' => '',
                'hash_key' => '',
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:14',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Billplz',
                'slug' => 'billplz',
                'instruction' => NULL,
                'secret_key' => '4e8389bd-f801-45ad-9da5-8f49b2eab1d2',
                'public_key' => '',
                'hash_key' => '',
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:17',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Wallet Balance',
                'slug' => 'wallet',
                'instruction' => NULL,
                'secret_key' => 'sk-TP7aEW4BeWe5wpCnML6Wwk69Kb0sp2FchliJy3Ml9yA',
                'public_key' => 'pk-E4ZPv8YvDsnoIbq7iLw8c5BcLdUDhglVZTI20Oa4cwX',
                'hash_key' => NULL,
                'is_active' => 1,
                'is_cash' => 1,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:11',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Abitmedia Cloud',
                'slug' => 'abitmedia',
                'instruction' => NULL,
                'secret_key' => '2y-13-tx-zsjtggeehkmygjbtsf-51z5-armmnw-ihbuspjufwubv4vxok6ery7wozao3wmggnxjgyg',
                'public_key' => NULL,
                'hash_key' => NULL,
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:07',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Paypal',
                'slug' => 'paypal',
                'instruction' => NULL,
                'secret_key' => 'ELoqrWAZoeGyXQUNzKVRxaYiRFHr6yBoB4x1_Q4ZF7HjNvfAvDo8__VhNFUnXfsLiBmuZlWz-dsh-rw1',
                'public_key' => 'AcgJxG2aaJEqCDFhE1bD6vi9JdA-FiKdJc8stEY4JATH-9IP0lVeOWMm_4HdLcLZAGFJlu6xuCpMXyZV',
                'hash_key' => NULL,
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-09-10 22:16:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}