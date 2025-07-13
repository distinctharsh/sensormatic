<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function edit()
    {
        $contact = ContactInfo::first();
        if (!$contact) {
            $contact = ContactInfo::create([]);
        }
        return view('admin.contact_info.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $contact = ContactInfo::first();
        if (!$contact) {
            $contact = ContactInfo::create([]);
        }
        $data = $request->validate([
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'map_embed' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);
        $contact->update($data);
        return redirect()->back()->with('success', 'Contact info updated successfully.');
    }
}
