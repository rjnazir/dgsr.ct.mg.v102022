<?php

/* form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_6c6c025627678aa0776cc63f8dbf5e959ac52163681fae1082d756f5d09939de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c5488113172e5d7c8066dfe7b442eb3f7d6cedc60a6f7012199579a6f05ba8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5488113172e5d7c8066dfe7b442eb3f7d6cedc60a6f7012199579a6f05ba8c->enter($__internal_1c5488113172e5d7c8066dfe7b442eb3f7d6cedc60a6f7012199579a6f05ba8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_de9104a1c43e5b575d11e8f09f854405eece3a08b20ad1fe9bfa519ff35f59c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9104a1c43e5b575d11e8f09f854405eece3a08b20ad1fe9bfa519ff35f59c3->enter($__internal_de9104a1c43e5b575d11e8f09f854405eece3a08b20ad1fe9bfa519ff35f59c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('radio_row', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('submit_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('reset_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_1c5488113172e5d7c8066dfe7b442eb3f7d6cedc60a6f7012199579a6f05ba8c->leave($__internal_1c5488113172e5d7c8066dfe7b442eb3f7d6cedc60a6f7012199579a6f05ba8c_prof);

        
        $__internal_de9104a1c43e5b575d11e8f09f854405eece3a08b20ad1fe9bfa519ff35f59c3->leave($__internal_de9104a1c43e5b575d11e8f09f854405eece3a08b20ad1fe9bfa519ff35f59c3_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f05527e835862468f3dc71cda225e0a70ad2a4cf2065e8c04949a1736d03458d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05527e835862468f3dc71cda225e0a70ad2a4cf2065e8c04949a1736d03458d->enter($__internal_f05527e835862468f3dc71cda225e0a70ad2a4cf2065e8c04949a1736d03458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7464f5dffd1260cc2de669a0d0d16ab969015ae2ffa02d61217e5cf29bb5baed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7464f5dffd1260cc2de669a0d0d16ab969015ae2ffa02d61217e5cf29bb5baed->enter($__internal_7464f5dffd1260cc2de669a0d0d16ab969015ae2ffa02d61217e5cf29bb5baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7464f5dffd1260cc2de669a0d0d16ab969015ae2ffa02d61217e5cf29bb5baed->leave($__internal_7464f5dffd1260cc2de669a0d0d16ab969015ae2ffa02d61217e5cf29bb5baed_prof);

        
        $__internal_f05527e835862468f3dc71cda225e0a70ad2a4cf2065e8c04949a1736d03458d->leave($__internal_f05527e835862468f3dc71cda225e0a70ad2a4cf2065e8c04949a1736d03458d_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0d0270247c6d010a52fc3898e7630c610cb1d0ae7270c5fe83f63b6fc625b3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0270247c6d010a52fc3898e7630c610cb1d0ae7270c5fe83f63b6fc625b3d8->enter($__internal_0d0270247c6d010a52fc3898e7630c610cb1d0ae7270c5fe83f63b6fc625b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cb30780ce55cd5776132ea76ee9dec1820fbef429b78dbcb7efdc985db9e5115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb30780ce55cd5776132ea76ee9dec1820fbef429b78dbcb7efdc985db9e5115->enter($__internal_cb30780ce55cd5776132ea76ee9dec1820fbef429b78dbcb7efdc985db9e5115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cb30780ce55cd5776132ea76ee9dec1820fbef429b78dbcb7efdc985db9e5115->leave($__internal_cb30780ce55cd5776132ea76ee9dec1820fbef429b78dbcb7efdc985db9e5115_prof);

        
        $__internal_0d0270247c6d010a52fc3898e7630c610cb1d0ae7270c5fe83f63b6fc625b3d8->leave($__internal_0d0270247c6d010a52fc3898e7630c610cb1d0ae7270c5fe83f63b6fc625b3d8_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_00ff7fc4ad9327b2556aac07dc1023b3ae85bb832c6b481e03b1ff1b75853d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ff7fc4ad9327b2556aac07dc1023b3ae85bb832c6b481e03b1ff1b75853d88->enter($__internal_00ff7fc4ad9327b2556aac07dc1023b3ae85bb832c6b481e03b1ff1b75853d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b7ef28c949fe5823ea7dc4052e679b47686995f254eecf0d979f815a130b7a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ef28c949fe5823ea7dc4052e679b47686995f254eecf0d979f815a130b7a3e->enter($__internal_b7ef28c949fe5823ea7dc4052e679b47686995f254eecf0d979f815a130b7a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_b7ef28c949fe5823ea7dc4052e679b47686995f254eecf0d979f815a130b7a3e->leave($__internal_b7ef28c949fe5823ea7dc4052e679b47686995f254eecf0d979f815a130b7a3e_prof);

        
        $__internal_00ff7fc4ad9327b2556aac07dc1023b3ae85bb832c6b481e03b1ff1b75853d88->leave($__internal_00ff7fc4ad9327b2556aac07dc1023b3ae85bb832c6b481e03b1ff1b75853d88_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_22d75938bcc12b06eb4e2578aae27adb7467f6b26d51607c906602329ca11a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d75938bcc12b06eb4e2578aae27adb7467f6b26d51607c906602329ca11a2a->enter($__internal_22d75938bcc12b06eb4e2578aae27adb7467f6b26d51607c906602329ca11a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9c79e4022701847f6a258ac284e77617f3cc5907228ca0d7955f20cf8330ed4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c79e4022701847f6a258ac284e77617f3cc5907228ca0d7955f20cf8330ed4a->enter($__internal_9c79e4022701847f6a258ac284e77617f3cc5907228ca0d7955f20cf8330ed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()) == twig_constant("Aes\\Bundle\\SettingBundle\\Entity\\Setting::TAUXCONVERSION_KEY"))) {
            // line 27
            echo "        <div class=\"form-group";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " has-error";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">
                <div class=\"input-group input-group-sm\">
                    ";
            // line 31
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-info btn-flat\">
                          EUR
                      </button>
                    </span>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 41
            echo "    <div class=\"form-group";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " has-error-group ";
            }
            echo "\">";
            // line 42
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 43
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 46
            echo "        </div>
    </div>
    ";
        }
        
        $__internal_9c79e4022701847f6a258ac284e77617f3cc5907228ca0d7955f20cf8330ed4a->leave($__internal_9c79e4022701847f6a258ac284e77617f3cc5907228ca0d7955f20cf8330ed4a_prof);

        
        $__internal_22d75938bcc12b06eb4e2578aae27adb7467f6b26d51607c906602329ca11a2a->leave($__internal_22d75938bcc12b06eb4e2578aae27adb7467f6b26d51607c906602329ca11a2a_prof);

    }

    // line 51
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a9b435313981ab1187528a5b3cc6ef9a906fcdc573b5a06dd74d4c7162c0f3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b435313981ab1187528a5b3cc6ef9a906fcdc573b5a06dd74d4c7162c0f3ec->enter($__internal_a9b435313981ab1187528a5b3cc6ef9a906fcdc573b5a06dd74d4c7162c0f3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8e6826d192e3c1032632d7ee0ca86780ec5345985d4a1d56bc944bdad40b4a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6826d192e3c1032632d7ee0ca86780ec5345985d4a1d56bc944bdad40b4a27->enter($__internal_8e6826d192e3c1032632d7ee0ca86780ec5345985d4a1d56bc944bdad40b4a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 52
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_8e6826d192e3c1032632d7ee0ca86780ec5345985d4a1d56bc944bdad40b4a27->leave($__internal_8e6826d192e3c1032632d7ee0ca86780ec5345985d4a1d56bc944bdad40b4a27_prof);

        
        $__internal_a9b435313981ab1187528a5b3cc6ef9a906fcdc573b5a06dd74d4c7162c0f3ec->leave($__internal_a9b435313981ab1187528a5b3cc6ef9a906fcdc573b5a06dd74d4c7162c0f3ec_prof);

    }

    // line 55
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6c09f17af14e9d7b9018a8342e89dbf57db22ef894056b7773d4497ca18b7276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c09f17af14e9d7b9018a8342e89dbf57db22ef894056b7773d4497ca18b7276->enter($__internal_6c09f17af14e9d7b9018a8342e89dbf57db22ef894056b7773d4497ca18b7276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a657d05863a76cf7ce87a730de99e8999123f4e15ccf3031c2e36965265ad924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a657d05863a76cf7ce87a730de99e8999123f4e15ccf3031c2e36965265ad924->enter($__internal_a657d05863a76cf7ce87a730de99e8999123f4e15ccf3031c2e36965265ad924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 56
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_a657d05863a76cf7ce87a730de99e8999123f4e15ccf3031c2e36965265ad924->leave($__internal_a657d05863a76cf7ce87a730de99e8999123f4e15ccf3031c2e36965265ad924_prof);

        
        $__internal_6c09f17af14e9d7b9018a8342e89dbf57db22ef894056b7773d4497ca18b7276->leave($__internal_6c09f17af14e9d7b9018a8342e89dbf57db22ef894056b7773d4497ca18b7276_prof);

    }

    // line 59
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_e829714bce4e691fe231157e941cecaab7d2dbae5ab9a05df0cb4bdd6c93b2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e829714bce4e691fe231157e941cecaab7d2dbae5ab9a05df0cb4bdd6c93b2a0->enter($__internal_e829714bce4e691fe231157e941cecaab7d2dbae5ab9a05df0cb4bdd6c93b2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_47e0ccd2801f0d100e820d30cdbdf61051ebdf6c85855430326ea52d9e93a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e0ccd2801f0d100e820d30cdbdf61051ebdf6c85855430326ea52d9e93a325->enter($__internal_47e0ccd2801f0d100e820d30cdbdf61051ebdf6c85855430326ea52d9e93a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 60
        ob_start();
        // line 61
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 62
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 63
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_47e0ccd2801f0d100e820d30cdbdf61051ebdf6c85855430326ea52d9e93a325->leave($__internal_47e0ccd2801f0d100e820d30cdbdf61051ebdf6c85855430326ea52d9e93a325_prof);

        
        $__internal_e829714bce4e691fe231157e941cecaab7d2dbae5ab9a05df0cb4bdd6c93b2a0->leave($__internal_e829714bce4e691fe231157e941cecaab7d2dbae5ab9a05df0cb4bdd6c93b2a0_prof);

    }

    // line 71
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4ad251124cab5c5711e298b7865fd4143528c006df979e12d010508907a9f2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad251124cab5c5711e298b7865fd4143528c006df979e12d010508907a9f2f2->enter($__internal_4ad251124cab5c5711e298b7865fd4143528c006df979e12d010508907a9f2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0eac87d83a9c1e5a33568855c0f5178f628276e69dc8de07744453eef727179a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eac87d83a9c1e5a33568855c0f5178f628276e69dc8de07744453eef727179a->enter($__internal_0eac87d83a9c1e5a33568855c0f5178f628276e69dc8de07744453eef727179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 72
        ob_start();
        // line 73
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 74
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 75
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0eac87d83a9c1e5a33568855c0f5178f628276e69dc8de07744453eef727179a->leave($__internal_0eac87d83a9c1e5a33568855c0f5178f628276e69dc8de07744453eef727179a_prof);

        
        $__internal_4ad251124cab5c5711e298b7865fd4143528c006df979e12d010508907a9f2f2->leave($__internal_4ad251124cab5c5711e298b7865fd4143528c006df979e12d010508907a9f2f2_prof);

    }

    // line 82
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_51f53435342bbbfb35f45a723e03d5acd679045138acf7aef7471c15810345bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f53435342bbbfb35f45a723e03d5acd679045138acf7aef7471c15810345bf->enter($__internal_51f53435342bbbfb35f45a723e03d5acd679045138acf7aef7471c15810345bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2a71400296d5cfdcfba00b65e5732500093f029975a84d37043672aa4d3e5f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a71400296d5cfdcfba00b65e5732500093f029975a84d37043672aa4d3e5f2d->enter($__internal_2a71400296d5cfdcfba00b65e5732500093f029975a84d37043672aa4d3e5f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 83
        ob_start();
        // line 84
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a71400296d5cfdcfba00b65e5732500093f029975a84d37043672aa4d3e5f2d->leave($__internal_2a71400296d5cfdcfba00b65e5732500093f029975a84d37043672aa4d3e5f2d_prof);

        
        $__internal_51f53435342bbbfb35f45a723e03d5acd679045138acf7aef7471c15810345bf->leave($__internal_51f53435342bbbfb35f45a723e03d5acd679045138acf7aef7471c15810345bf_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_7541497023848576bc9205baf403825970d4dc2e513caf39516d35acb2ffb3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7541497023848576bc9205baf403825970d4dc2e513caf39516d35acb2ffb3d2->enter($__internal_7541497023848576bc9205baf403825970d4dc2e513caf39516d35acb2ffb3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_63367abdd5e087bd8f7197acfa6830c37712c736c25d779aef0277ad0bb374e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63367abdd5e087bd8f7197acfa6830c37712c736c25d779aef0277ad0bb374e0->enter($__internal_63367abdd5e087bd8f7197acfa6830c37712c736c25d779aef0277ad0bb374e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-6";
        
        $__internal_63367abdd5e087bd8f7197acfa6830c37712c736c25d779aef0277ad0bb374e0->leave($__internal_63367abdd5e087bd8f7197acfa6830c37712c736c25d779aef0277ad0bb374e0_prof);

        
        $__internal_7541497023848576bc9205baf403825970d4dc2e513caf39516d35acb2ffb3d2->leave($__internal_7541497023848576bc9205baf403825970d4dc2e513caf39516d35acb2ffb3d2_prof);

    }

    public function getTemplateName()
    {
        return "form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  414 => 94,  405 => 93,  390 => 87,  386 => 86,  382 => 85,  379 => 84,  377 => 83,  368 => 82,  353 => 76,  349 => 75,  345 => 74,  342 => 73,  340 => 72,  331 => 71,  316 => 65,  312 => 64,  308 => 63,  304 => 62,  297 => 61,  295 => 60,  286 => 59,  276 => 56,  267 => 55,  257 => 52,  248 => 51,  235 => 46,  233 => 44,  229 => 43,  227 => 42,  221 => 41,  208 => 31,  202 => 29,  200 => 28,  194 => 27,  192 => 26,  183 => 25,  173 => 22,  164 => 21,  152 => 16,  149 => 15,  143 => 13,  140 => 12,  138 => 11,  129 => 10,  119 => 5,  117 => 4,  108 => 3,  98 => 93,  95 => 92,  93 => 82,  90 => 81,  88 => 71,  85 => 70,  83 => 59,  80 => 58,  78 => 55,  75 => 54,  73 => 51,  70 => 50,  68 => 25,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-4
{%- endblock form_label_class %}

{% block form_row -%}
    {% if form.vars.name == constant('Aes\\\\Bundle\\\\SettingBundle\\\\Entity\\\\Setting::TAUXCONVERSION_KEY') %}
        <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                <div class=\"input-group input-group-sm\">
                    {{ block('form_widget') }}
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-info btn-flat\">
                          EUR
                      </button>
                    </span>
                </div>
            </div>
        </div>
    {% else %}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error-group {% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {#{{- form_errors(form) -}}#}
        </div>
    </div>
    {% endif %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-6
{%- endblock form_group_class %}
", "form/bootstrap_3_horizontal_layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
