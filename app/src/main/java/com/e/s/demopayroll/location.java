package com.e.s.demopayroll;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.common.GooglePlayServicesNotAvailableException;
import com.google.android.gms.common.GooglePlayServicesRepairableException;
import com.google.android.gms.location.places.Place;
import com.google.android.gms.location.places.ui.PlacePicker;
import com.google.android.gms.maps.model.LatLng;

import java.io.IOException;

/**
 * Created by Kunnu on 12/2/2017.
 */

public class location extends AppCompatActivity {
    Button getlocation;
    TextView text;
    int PLACE_PICKER_REQUEST = 1;

    private PlacePicker.IntentBuilder builder;
    private String TAG;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.location);

        builder = new PlacePicker.IntentBuilder();


        getlocation = (Button) findViewById(R.id.getlocation);
        text = (TextView) findViewById(R.id.text);


        getlocation.setOnClickListener(new View.OnClickListener() {


            @Override
            public void onClick(View v) {
                if (builder != null) {
                    try {
                        startActivityForResult(builder.build(location.this), PLACE_PICKER_REQUEST);

                    } catch (GooglePlayServicesRepairableException e) {
                        e.printStackTrace();
                    } catch (GooglePlayServicesNotAvailableException e) {
                        e.printStackTrace();
                    }


                }


            }
        });
    }
    protected void onActivityResult(int requestCode, int resultCode, Intent data)

    {

        if (requestCode == PLACE_PICKER_REQUEST) {
            if (resultCode == RESULT_OK) {
                Place selectedPlace = PlacePicker.getPlace(data, location.this);
                LatLng latLng = selectedPlace.getLatLng();
                text.setText(selectedPlace.getLatLng().toString());
                String toastMsg = String.format("Place: %s", selectedPlace.getName());
                Toast.makeText(this, toastMsg, Toast.LENGTH_LONG).show();

            }
        }
    }
  public void postData(String la, String lo) {
        // Create a new HttpClient and Post Header
        HttpClient httpclient = new HttpClient();
        HttpGet  htget = new HttpGet("http://<your_app_url>/Home/Book/"+la+"/"+lo);

        try {
            // Execute HTTP Post Request
            HttpResponse response = httpclient.execute(htget);
            String resp = response.getStatusLine().toString();
            Toast.makeText(this, resp, 5000).show();


        } catch (ClientProtocolException e) {
            Toast.makeText(this, "Error", 5000).show();
        } catch (IOException e) {
            Toast.makeText(this, "Error", 5000).show();
        }

}
