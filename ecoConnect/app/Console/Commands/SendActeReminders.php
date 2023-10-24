<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use App\Models\ActeVolontaire;
use App\Mail\ActeReminderMail;
class SendActeReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */

     public function handle()
     {
         $reminderMinutes = 1; // Number of minutes before the acte to send reminders
         $now = now();

         $actes = ActeVolontaire::where('date', '>=', $now)
             ->where('date', '<=', $now->addMinutes($reminderMinutes))
             ->get();

         foreach ($actes as $acte) {
             // Iterate through participants of this acte and send reminders
             foreach ($acte->participants as $participant) {
                 Mail::to($participant->email)->send(new ActeReminderMail($acte));
             }
         }
     }
}
