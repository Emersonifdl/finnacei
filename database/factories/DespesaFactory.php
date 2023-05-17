<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Despesa>
 */
class DespesaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'descricao' => $this->descricao(),
            'valor' => $this->faker->randomFloat(2, 0, 99999.99),
            'vencimento' => $this->faker->dateTimeBetween('-1 month', '+1 month')
        ];
    }

    private function descricao(): string
    {
        return $this->faker->randomElement([
            'Água',
            'Luz',
            'Telefone',
            'Internet',
            'Cartão de crédito',
            'Empréstimo',
            'Aluguel',
            'Universidade',
            'Academia',
            'Plano de saúde',
            'Seguro do carro',
            'Plano odontológico',
            'Netflix',
        ]);
    }
}
