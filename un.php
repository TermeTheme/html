@media (max-width: 768px) {
  .comment_form {
    form {
      .comment-form-author,
      .comment-form-email {
        width: 100%;
      }
    }
  }
  .small_post {
    &.half_width {
      ul {
        li {
          width: 100%;
          &:nth-last-child(2) {
            border-bottom: solid #e4e4e4;
            @include rem(( border-bottom-width: 1px,));
          }
        }
      }
    }
  }
  .product_page {
    .product_image {
      width: 100%;
      padding: 0;
    }
    .product_detail {
      width: 100%;
    }
  }
  footer.footer {
    &.style_1 .main_area {
      .box_1 {
        text-align: center;
        img {
          display: block;
          margin: 0 auto;
        }
        ul {
          display: inline-block;
          float: none;
          width: auto;
        }
      }
    }
    &.style_3 .top_bar {
      .social_menu {
        &:after {
          display: none;
        }
      }
    }
    &.style_5 .top_bar {
      .newsletter {
        span {
          display: none;
        }
        form {
          width: 100%;
        }
      }
    }
    &.style_1 .bottom_bar,
    &.style_5 .bottom_bar {
      .social_menu {
        text-align: center;
        float: none;
      }
      p {
        float: none;
      }
      ul {
        display: inline-block;
        float: none;
        width: auto;
      }
    }
  }
}
