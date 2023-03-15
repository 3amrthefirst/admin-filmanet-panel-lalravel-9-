<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';
    protected function getCards(): array
    {
        $user = count(User::all());
        return [

        Card::make('user', $user)
            ->description('32k increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
            Card::make('Unique views', '192.1k')
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
//            Card::make('Bounce rate', '21%')
//                ->extraAttributes([
//                'class' => 'cursor-pointer',
//                'wire:click' => '$emitUp("setStatusFilter", "processed")',
//            ]),
            Card::make('Average time on page', '3:12')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
        ];
    }
}
