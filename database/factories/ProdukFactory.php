<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk'=> $this->faker->words(2, true),
            'harga' => $this->faker->numberBetween(10000, 1000000),
            'stok' => $this->faker->numberBetween(0, 100),
            'merek_id' => \App\Models\Merek::factory()->create()->id,
            'kategori_id' => \App\Models\Kategori::factory()->create()->id,
            'foto' => 'https://picsum.photos/id/' . rand(1, 1000) . '/200/300',
            'deskripsi' => $this->faker->paragraph(3),
        ];
    }
}
