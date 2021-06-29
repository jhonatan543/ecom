


                    @php
                        $orders = App\Order::latest()->get();
                     @endphp
                     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACOMSIV</title>
    <style>
body {
            background-color: #ffffff;
            font-family: Arial;
            font-size: 13px;
            box-sizing: border-box;
        }

        table {
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            width: 100%;

        }

        th,
        td {
            border: 1px solid #000;
            border-collapse: collapse;
            text-align: center;
            padding: 2px;
        }

        thead {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            display: table-header-group;
            text-align: left;

        }

        tr:nth-child(even) {
            background-color: rgb(255, 255, 255);
        }

        tr:hover td {
            background-color: #ffffff;
            color: white;
        }

        h1 {
            text-align: center;
        }

        </style>

<body >
<center>
<h2>INFORMACIÓN DE SU PEDIDO N°{{ $order->id }}</h2>
</center>
<h4>INFORMACIÓN GENERAL</h4>


                    <table >
                    <thead>
                      <tr>
                        <th style = "  border: 1px solid #000; padding: 5px;">N°Boleta</th>
                        <th style = "border: 1px solid #000; padding: 5px; ">Tipo de Pago</th>
                        <th style = "border: 1px solid #000; padding: 5px;">SubTotal</th>
                        <th style = "border: 1px solid #000; padding: 5px;">Total</th>
                        <th style = "border: 1px solid #000; padding: 5px;">Cupon</th>
                        <th style = "border: 1px solid #000; padding: 5px;">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style = "border: 1px solid #000; padding: 5px;">{{ $order->invoice_no }}</td>
                        <td style = "border: 1px solid #000; padding: 5px;">{{ $order->payment_type }}</td>
                        <td style = "border: 1px solid #000; padding: 5px;">S/.{{ $order->subtotal }}</td>
                        <td style = "border: 1px solid #000; padding: 5px;">S/.{{ $order->total }}</td>
                        <td style = "border: 1px solid #000; padding: 5px;">
                        @if ($order->coupon_discount == NULL)
                      <span class="badge badge-pill badge-danger">NO</span>
                          @else
                          <span class="badge badge-pill badge-danger">{{ $order->coupon_discount }}%</span>
                      @endif</td>
                        <td style = "border: 1px solid #000; padding: 5px;">
                        @if($order->status == 2)
                            <span class="badge badge-success">Finalizado</span>
                            @elseif($order->status == 1)
                            <span class="badge badge-warning">Revisado</span>
                            @else
                            <span class="badge badge-danger">Pendiente</span>
                            @endif
                        </td>
                      </tr>
                    </tbody>
                  </table>

<h4>INFORMACIÓN DEL ENVÍO</h4>

                  <table >
                      <thead>
                        <tr>
                          <th style = "border: 1px solid #000;   ">Nombre del Envío</th>
                          <th style = "border: 1px solid #000;  ">Apellido del Envío </th>
                          <th style = "border: 1px solid #000;  ">Correo del Envío</th>
                          <th style = "border: 1px solid #000;  ">Telefono del Envío</th>
                          <th style = "border: 1px solid #000;  ">Dirección del Envío</th>
                          <th style = "border: 1px solid #000;  ">Ciudad del Envío</th>
                          <th style = "border: 1px solid #000;  ">Código postal del Envío</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style = "border: 1px solid #000; padding: 5px; word-wrap: break-word; ">{{ $shipping->shipping_first_name }}</td>
                          <td style = "border: 1px solid #000; padding: 5px; word-wrap: break-word;">{{ $shipping->shipping_last_name }}</td>
                          <td style = "border: 1px solid #000; padding: 5px;">{{ $shipping->shipping_email }}</td>
                          <td style = "border: 1px solid #000; padding: 5px;">{{ $shipping->shipping_phone }}</td>
                          <td style = "border: 1px solid #000; padding: 5px; word-wrap: break-word;">{{ $shipping->address }}</td>
                          <td style = "border: 1px solid #000; padding: 5px;">{{ $shipping->state }}</td>
                          <td style = "border: 1px solid #000; padding: 5px;">{{ $shipping->post_code }}</td>
                        </tr>
                      </tbody>
                    </table>

<h4>INFORMACIÓN DE PRODUCTOS</h4>

        <table >
                      <thead>
                        <tr>
                          <th style = "border: 1px solid #000; padding: 5px; ">Código del Producto </th>
                          <th style = "border: 1px solid #000; padding: 5px; ">Nombre del Producto</th>
                          <th style = "border: 1px solid #000; padding: 5px; ">Cantidad del Producto</th>
                        </tr>
                      </thead>

                      <tbody>
                      @foreach ($orderItems as $row)
                        <tr>
                        <td style = "border: 1px solid #000; padding: 5px; word-wrap: break-word;">{{ $row->product->product_code }}</td>
                          <td style = "border: 1px solid #000; padding: 5px; word-wrap: break-word;">{{ $row->product->product_name }}</td>
                          <td style = "border: 1px solid #000; padding: 5px;">{{ $row->product_qty }}</td>
                        </tr>
                        @endforeach
                      </tbody>

                    </table>
</body>
</html>


