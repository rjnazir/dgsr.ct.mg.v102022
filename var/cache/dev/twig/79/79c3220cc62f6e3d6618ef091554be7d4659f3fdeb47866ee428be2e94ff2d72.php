<?php

/* :form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_113e51a806137daa695f417c63371ceae745083963ebc39f831a3e1bc0416742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", ":form:bootstrap_3_horizontal_layout.html.twig", 1);
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
        $__internal_314bdbf2ab80e8f69fa81213bb2419fc4f157c58d883da35c3864e30dbc17805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314bdbf2ab80e8f69fa81213bb2419fc4f157c58d883da35c3864e30dbc17805->enter($__internal_314bdbf2ab80e8f69fa81213bb2419fc4f157c58d883da35c3864e30dbc17805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_8fee5d1f52b804c2849d87aaa6851c92f2b65dfc7545fbbd96561950487467a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fee5d1f52b804c2849d87aaa6851c92f2b65dfc7545fbbd96561950487467a4->enter($__internal_8fee5d1f52b804c2849d87aaa6851c92f2b65dfc7545fbbd96561950487467a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_314bdbf2ab80e8f69fa81213bb2419fc4f157c58d883da35c3864e30dbc17805->leave($__internal_314bdbf2ab80e8f69fa81213bb2419fc4f157c58d883da35c3864e30dbc17805_prof);

        
        $__internal_8fee5d1f52b804c2849d87aaa6851c92f2b65dfc7545fbbd96561950487467a4->leave($__internal_8fee5d1f52b804c2849d87aaa6851c92f2b65dfc7545fbbd96561950487467a4_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c81608a7602e5d3275f8543def34ac5a47f8d2cdc83cbc660d001b4bf9801bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81608a7602e5d3275f8543def34ac5a47f8d2cdc83cbc660d001b4bf9801bc6->enter($__internal_c81608a7602e5d3275f8543def34ac5a47f8d2cdc83cbc660d001b4bf9801bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_816a12aad34f8c5779a465051a167e8bfe12551e0fe921c0255d653fec8a3133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816a12aad34f8c5779a465051a167e8bfe12551e0fe921c0255d653fec8a3133->enter($__internal_816a12aad34f8c5779a465051a167e8bfe12551e0fe921c0255d653fec8a3133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_816a12aad34f8c5779a465051a167e8bfe12551e0fe921c0255d653fec8a3133->leave($__internal_816a12aad34f8c5779a465051a167e8bfe12551e0fe921c0255d653fec8a3133_prof);

        
        $__internal_c81608a7602e5d3275f8543def34ac5a47f8d2cdc83cbc660d001b4bf9801bc6->leave($__internal_c81608a7602e5d3275f8543def34ac5a47f8d2cdc83cbc660d001b4bf9801bc6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f32578113051f61638659003a35376002a32de07e89e7321ca7e4cc9df0e81f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32578113051f61638659003a35376002a32de07e89e7321ca7e4cc9df0e81f6->enter($__internal_f32578113051f61638659003a35376002a32de07e89e7321ca7e4cc9df0e81f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c21c32623737674b48827827630aa528a5078a0344a53256d1a0e9e0d20124a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21c32623737674b48827827630aa528a5078a0344a53256d1a0e9e0d20124a3->enter($__internal_c21c32623737674b48827827630aa528a5078a0344a53256d1a0e9e0d20124a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_c21c32623737674b48827827630aa528a5078a0344a53256d1a0e9e0d20124a3->leave($__internal_c21c32623737674b48827827630aa528a5078a0344a53256d1a0e9e0d20124a3_prof);

        
        $__internal_f32578113051f61638659003a35376002a32de07e89e7321ca7e4cc9df0e81f6->leave($__internal_f32578113051f61638659003a35376002a32de07e89e7321ca7e4cc9df0e81f6_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0d49d00ffae85b18e3f246cf28fb15ade78ec92eb5e039022b96a9f94edde47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d49d00ffae85b18e3f246cf28fb15ade78ec92eb5e039022b96a9f94edde47b->enter($__internal_0d49d00ffae85b18e3f246cf28fb15ade78ec92eb5e039022b96a9f94edde47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4bc62d285224fb6b7e717b7255607dd901379cd926192a6260d29ea694c68f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc62d285224fb6b7e717b7255607dd901379cd926192a6260d29ea694c68f75->enter($__internal_4bc62d285224fb6b7e717b7255607dd901379cd926192a6260d29ea694c68f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_4bc62d285224fb6b7e717b7255607dd901379cd926192a6260d29ea694c68f75->leave($__internal_4bc62d285224fb6b7e717b7255607dd901379cd926192a6260d29ea694c68f75_prof);

        
        $__internal_0d49d00ffae85b18e3f246cf28fb15ade78ec92eb5e039022b96a9f94edde47b->leave($__internal_0d49d00ffae85b18e3f246cf28fb15ade78ec92eb5e039022b96a9f94edde47b_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cf4f285d0f09b208f8d3db3c31064fc726f96126d315643ad6d65e155395d9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4f285d0f09b208f8d3db3c31064fc726f96126d315643ad6d65e155395d9ff->enter($__internal_cf4f285d0f09b208f8d3db3c31064fc726f96126d315643ad6d65e155395d9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d4f94154c01a15dd135c193527bce16bfc5705c01c2aa722af3c5cb1b28e6078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f94154c01a15dd135c193527bce16bfc5705c01c2aa722af3c5cb1b28e6078->enter($__internal_d4f94154c01a15dd135c193527bce16bfc5705c01c2aa722af3c5cb1b28e6078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d4f94154c01a15dd135c193527bce16bfc5705c01c2aa722af3c5cb1b28e6078->leave($__internal_d4f94154c01a15dd135c193527bce16bfc5705c01c2aa722af3c5cb1b28e6078_prof);

        
        $__internal_cf4f285d0f09b208f8d3db3c31064fc726f96126d315643ad6d65e155395d9ff->leave($__internal_cf4f285d0f09b208f8d3db3c31064fc726f96126d315643ad6d65e155395d9ff_prof);

    }

    // line 51
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2056e2dfa5bfc6299459aef1be4d23028389dbe796202571eed47211a0abd429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2056e2dfa5bfc6299459aef1be4d23028389dbe796202571eed47211a0abd429->enter($__internal_2056e2dfa5bfc6299459aef1be4d23028389dbe796202571eed47211a0abd429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9ed988500255e0ed9292ee2bca5b49480749fd049ef4c290f359c86e596e65d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed988500255e0ed9292ee2bca5b49480749fd049ef4c290f359c86e596e65d2->enter($__internal_9ed988500255e0ed9292ee2bca5b49480749fd049ef4c290f359c86e596e65d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 52
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9ed988500255e0ed9292ee2bca5b49480749fd049ef4c290f359c86e596e65d2->leave($__internal_9ed988500255e0ed9292ee2bca5b49480749fd049ef4c290f359c86e596e65d2_prof);

        
        $__internal_2056e2dfa5bfc6299459aef1be4d23028389dbe796202571eed47211a0abd429->leave($__internal_2056e2dfa5bfc6299459aef1be4d23028389dbe796202571eed47211a0abd429_prof);

    }

    // line 55
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5cdffdda94ad3d507fdcd087d81f89197f8af4186a3fd7ea6c8888c4362dbc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdffdda94ad3d507fdcd087d81f89197f8af4186a3fd7ea6c8888c4362dbc21->enter($__internal_5cdffdda94ad3d507fdcd087d81f89197f8af4186a3fd7ea6c8888c4362dbc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bebcc4174a30d5c69af18267c7889ff8fd114cfddfe750ca9123f380554e1725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebcc4174a30d5c69af18267c7889ff8fd114cfddfe750ca9123f380554e1725->enter($__internal_bebcc4174a30d5c69af18267c7889ff8fd114cfddfe750ca9123f380554e1725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 56
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_bebcc4174a30d5c69af18267c7889ff8fd114cfddfe750ca9123f380554e1725->leave($__internal_bebcc4174a30d5c69af18267c7889ff8fd114cfddfe750ca9123f380554e1725_prof);

        
        $__internal_5cdffdda94ad3d507fdcd087d81f89197f8af4186a3fd7ea6c8888c4362dbc21->leave($__internal_5cdffdda94ad3d507fdcd087d81f89197f8af4186a3fd7ea6c8888c4362dbc21_prof);

    }

    // line 59
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_72192bbdabab7d6a0bb5d36f79539d7b146db7ddf3318fc06acf7891b1e8cd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72192bbdabab7d6a0bb5d36f79539d7b146db7ddf3318fc06acf7891b1e8cd5c->enter($__internal_72192bbdabab7d6a0bb5d36f79539d7b146db7ddf3318fc06acf7891b1e8cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_96d1ed68389e820a0cd6ad35466eb7d4afcd78e4a9ad7e7d1ae0cac85d0f5da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d1ed68389e820a0cd6ad35466eb7d4afcd78e4a9ad7e7d1ae0cac85d0f5da7->enter($__internal_96d1ed68389e820a0cd6ad35466eb7d4afcd78e4a9ad7e7d1ae0cac85d0f5da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_96d1ed68389e820a0cd6ad35466eb7d4afcd78e4a9ad7e7d1ae0cac85d0f5da7->leave($__internal_96d1ed68389e820a0cd6ad35466eb7d4afcd78e4a9ad7e7d1ae0cac85d0f5da7_prof);

        
        $__internal_72192bbdabab7d6a0bb5d36f79539d7b146db7ddf3318fc06acf7891b1e8cd5c->leave($__internal_72192bbdabab7d6a0bb5d36f79539d7b146db7ddf3318fc06acf7891b1e8cd5c_prof);

    }

    // line 71
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5afbcc38f1825079d83ba0c626db6887fd5980dbdf52e4fd0a733d80f439a80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afbcc38f1825079d83ba0c626db6887fd5980dbdf52e4fd0a733d80f439a80d->enter($__internal_5afbcc38f1825079d83ba0c626db6887fd5980dbdf52e4fd0a733d80f439a80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_44b55e984147ed16577cafbfdc85b42d5132bbca32f4d9def9b95136d358a4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b55e984147ed16577cafbfdc85b42d5132bbca32f4d9def9b95136d358a4c1->enter($__internal_44b55e984147ed16577cafbfdc85b42d5132bbca32f4d9def9b95136d358a4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_44b55e984147ed16577cafbfdc85b42d5132bbca32f4d9def9b95136d358a4c1->leave($__internal_44b55e984147ed16577cafbfdc85b42d5132bbca32f4d9def9b95136d358a4c1_prof);

        
        $__internal_5afbcc38f1825079d83ba0c626db6887fd5980dbdf52e4fd0a733d80f439a80d->leave($__internal_5afbcc38f1825079d83ba0c626db6887fd5980dbdf52e4fd0a733d80f439a80d_prof);

    }

    // line 82
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_cd68705de63cb26c42c9a00069251bc79e1f77b24e23d2ddb5b250568e0871be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd68705de63cb26c42c9a00069251bc79e1f77b24e23d2ddb5b250568e0871be->enter($__internal_cd68705de63cb26c42c9a00069251bc79e1f77b24e23d2ddb5b250568e0871be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_36830777bfe2283094025cbf852bfa72d28463bb7d65587c386c51b1bfd021f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36830777bfe2283094025cbf852bfa72d28463bb7d65587c386c51b1bfd021f9->enter($__internal_36830777bfe2283094025cbf852bfa72d28463bb7d65587c386c51b1bfd021f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_36830777bfe2283094025cbf852bfa72d28463bb7d65587c386c51b1bfd021f9->leave($__internal_36830777bfe2283094025cbf852bfa72d28463bb7d65587c386c51b1bfd021f9_prof);

        
        $__internal_cd68705de63cb26c42c9a00069251bc79e1f77b24e23d2ddb5b250568e0871be->leave($__internal_cd68705de63cb26c42c9a00069251bc79e1f77b24e23d2ddb5b250568e0871be_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c590aa18b43653ad044b983425feb63a5bf57d06e755ed93d7c750e0e2283eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c590aa18b43653ad044b983425feb63a5bf57d06e755ed93d7c750e0e2283eaa->enter($__internal_c590aa18b43653ad044b983425feb63a5bf57d06e755ed93d7c750e0e2283eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_90d0e2b8f251144f6dbb00cce82eb0e7b72317605d23f623320abd2da3de67f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d0e2b8f251144f6dbb00cce82eb0e7b72317605d23f623320abd2da3de67f1->enter($__internal_90d0e2b8f251144f6dbb00cce82eb0e7b72317605d23f623320abd2da3de67f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-6";
        
        $__internal_90d0e2b8f251144f6dbb00cce82eb0e7b72317605d23f623320abd2da3de67f1->leave($__internal_90d0e2b8f251144f6dbb00cce82eb0e7b72317605d23f623320abd2da3de67f1_prof);

        
        $__internal_c590aa18b43653ad044b983425feb63a5bf57d06e755ed93d7c750e0e2283eaa->leave($__internal_c590aa18b43653ad044b983425feb63a5bf57d06e755ed93d7c750e0e2283eaa_prof);

    }

    public function getTemplateName()
    {
        return ":form:bootstrap_3_horizontal_layout.html.twig";
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
", ":form:bootstrap_3_horizontal_layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
