<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'jenis' => $this->faker->word(),
            'gambar' => $this->faker->randomElement(['https://picsum.photos/1023/767', 'https://picsum.photos/1022/766', 'https://picsum.photos/1021/765']),
            'deskripsi' => $this->faker->paragraph(),
            'harga_jual' => $this->faker->randomNumber(5, false),
            'harga_beli' => $this->faker->randomNumber(5, false),
            'stok' => $this->faker->randomNumber(5, true),
        ];
    }
}
