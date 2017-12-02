package com.e.s.demopayroll;
import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

/**
 * Created by Kunnu on 11/30/2017.
 */

public class LoginActivity extends AppCompatActivity {
    EditText id,pass;
    Button button;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        id=(EditText)findViewById(R.id.id);
        pass=(EditText)findViewById(R.id.password);
        button=(Button)findViewById(R.id.btn);

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                if (!isValidPass(pass)) {
                    pass.setError("Minimum 6 characters");
                }

                if (!isValidPhone(id))
                    {
                    id.setError("Phone is Required");
                }

                Intent intent=new Intent(LoginActivity.this,image.class);
                startActivity(intent);
            }
        });


        }
    private boolean isValidPass(EditText pass) {
        if (pass.length() != 0 && pass.length() >= 6) {
            return true;
        }
        return false;
    }

    private boolean isValidPhone(EditText id) {
        if (id.length() != 0 && id.length() <= 10) {
            return true;
        }
        return false;
    }

}
