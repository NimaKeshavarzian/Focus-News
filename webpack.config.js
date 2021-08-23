const path = require("path");
const terserPlugin = require("terser-webpack-plugin");
const miniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    entry: "./js/index.js",
    output: {
        filename: "bundle.js",
        path: path.resolve(__dirname, './dist'),
        publicPath: "./"
    },
    mode: "production",
    module: {
        rules: [{
                test: /\.css$/,
                use: [miniCssExtractPlugin.loader, 'css-loader']
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ["@babel/env"]
                    }
                }
            }
        ]
    },
    plugins: [
        new terserPlugin(),
        new miniCssExtractPlugin({
            filename: "style.css"
        }),
    ]
}