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
        $__internal_0dafe4cf3765c540d1edf2075eb87fc9a37dde4e2a6ece607c09d4a199cbc93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dafe4cf3765c540d1edf2075eb87fc9a37dde4e2a6ece607c09d4a199cbc93a->enter($__internal_0dafe4cf3765c540d1edf2075eb87fc9a37dde4e2a6ece607c09d4a199cbc93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_fb39ddb32b5022b4dc7ddb20fb4c651028eab2d74ee41691063606b7e5597996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb39ddb32b5022b4dc7ddb20fb4c651028eab2d74ee41691063606b7e5597996->enter($__internal_fb39ddb32b5022b4dc7ddb20fb4c651028eab2d74ee41691063606b7e5597996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_0dafe4cf3765c540d1edf2075eb87fc9a37dde4e2a6ece607c09d4a199cbc93a->leave($__internal_0dafe4cf3765c540d1edf2075eb87fc9a37dde4e2a6ece607c09d4a199cbc93a_prof);

        
        $__internal_fb39ddb32b5022b4dc7ddb20fb4c651028eab2d74ee41691063606b7e5597996->leave($__internal_fb39ddb32b5022b4dc7ddb20fb4c651028eab2d74ee41691063606b7e5597996_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_481eabc98afe300b311290ac6584609152ec8a4155397cd8e8a514f3381eb97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481eabc98afe300b311290ac6584609152ec8a4155397cd8e8a514f3381eb97a->enter($__internal_481eabc98afe300b311290ac6584609152ec8a4155397cd8e8a514f3381eb97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a59ed7731f49275e264e889723740306d7ce3723701c4933332e7b13dd5c132d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59ed7731f49275e264e889723740306d7ce3723701c4933332e7b13dd5c132d->enter($__internal_a59ed7731f49275e264e889723740306d7ce3723701c4933332e7b13dd5c132d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a59ed7731f49275e264e889723740306d7ce3723701c4933332e7b13dd5c132d->leave($__internal_a59ed7731f49275e264e889723740306d7ce3723701c4933332e7b13dd5c132d_prof);

        
        $__internal_481eabc98afe300b311290ac6584609152ec8a4155397cd8e8a514f3381eb97a->leave($__internal_481eabc98afe300b311290ac6584609152ec8a4155397cd8e8a514f3381eb97a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_561bd0ad34de5168b0411d714652edb5338d1695a362a54b9977f60c8ba7b2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561bd0ad34de5168b0411d714652edb5338d1695a362a54b9977f60c8ba7b2de->enter($__internal_561bd0ad34de5168b0411d714652edb5338d1695a362a54b9977f60c8ba7b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fdf8c200f5da5928b5441be704356aed336120dcee73cb4e6b0e420cc9e97f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf8c200f5da5928b5441be704356aed336120dcee73cb4e6b0e420cc9e97f2d->enter($__internal_fdf8c200f5da5928b5441be704356aed336120dcee73cb4e6b0e420cc9e97f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_fdf8c200f5da5928b5441be704356aed336120dcee73cb4e6b0e420cc9e97f2d->leave($__internal_fdf8c200f5da5928b5441be704356aed336120dcee73cb4e6b0e420cc9e97f2d_prof);

        
        $__internal_561bd0ad34de5168b0411d714652edb5338d1695a362a54b9977f60c8ba7b2de->leave($__internal_561bd0ad34de5168b0411d714652edb5338d1695a362a54b9977f60c8ba7b2de_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_2f9458a36f929e4aa2f778f944994cff41aa6983524517a1de9f4a5cd2814698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9458a36f929e4aa2f778f944994cff41aa6983524517a1de9f4a5cd2814698->enter($__internal_2f9458a36f929e4aa2f778f944994cff41aa6983524517a1de9f4a5cd2814698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1c38199cfae2a0a556601faf4249c58555509a2b21c2939cb36cff68b43a0508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c38199cfae2a0a556601faf4249c58555509a2b21c2939cb36cff68b43a0508->enter($__internal_1c38199cfae2a0a556601faf4249c58555509a2b21c2939cb36cff68b43a0508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_1c38199cfae2a0a556601faf4249c58555509a2b21c2939cb36cff68b43a0508->leave($__internal_1c38199cfae2a0a556601faf4249c58555509a2b21c2939cb36cff68b43a0508_prof);

        
        $__internal_2f9458a36f929e4aa2f778f944994cff41aa6983524517a1de9f4a5cd2814698->leave($__internal_2f9458a36f929e4aa2f778f944994cff41aa6983524517a1de9f4a5cd2814698_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e2309bac881d254ce3de0a12c2b53dd06ea345c2097edee4a6fe1ea8d240ff85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2309bac881d254ce3de0a12c2b53dd06ea345c2097edee4a6fe1ea8d240ff85->enter($__internal_e2309bac881d254ce3de0a12c2b53dd06ea345c2097edee4a6fe1ea8d240ff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1deb691b4983de5586461b27e884c325fcb76be0341ae20766a532ace5288390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1deb691b4983de5586461b27e884c325fcb76be0341ae20766a532ace5288390->enter($__internal_1deb691b4983de5586461b27e884c325fcb76be0341ae20766a532ace5288390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1deb691b4983de5586461b27e884c325fcb76be0341ae20766a532ace5288390->leave($__internal_1deb691b4983de5586461b27e884c325fcb76be0341ae20766a532ace5288390_prof);

        
        $__internal_e2309bac881d254ce3de0a12c2b53dd06ea345c2097edee4a6fe1ea8d240ff85->leave($__internal_e2309bac881d254ce3de0a12c2b53dd06ea345c2097edee4a6fe1ea8d240ff85_prof);

    }

    // line 51
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c40dbd20c91269446065de4b55fc4c6277ce989a6a8db62864b7361f896a01b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40dbd20c91269446065de4b55fc4c6277ce989a6a8db62864b7361f896a01b1->enter($__internal_c40dbd20c91269446065de4b55fc4c6277ce989a6a8db62864b7361f896a01b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_003eb29baa9e0a8236eded91c4dc1f9da6cc884edc92f496d84ee5c88fe67a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003eb29baa9e0a8236eded91c4dc1f9da6cc884edc92f496d84ee5c88fe67a53->enter($__internal_003eb29baa9e0a8236eded91c4dc1f9da6cc884edc92f496d84ee5c88fe67a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 52
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_003eb29baa9e0a8236eded91c4dc1f9da6cc884edc92f496d84ee5c88fe67a53->leave($__internal_003eb29baa9e0a8236eded91c4dc1f9da6cc884edc92f496d84ee5c88fe67a53_prof);

        
        $__internal_c40dbd20c91269446065de4b55fc4c6277ce989a6a8db62864b7361f896a01b1->leave($__internal_c40dbd20c91269446065de4b55fc4c6277ce989a6a8db62864b7361f896a01b1_prof);

    }

    // line 55
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c9dcd2733afcc47351ad33f4d94d3ccc3abd3756b8438016766ff612185d371b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9dcd2733afcc47351ad33f4d94d3ccc3abd3756b8438016766ff612185d371b->enter($__internal_c9dcd2733afcc47351ad33f4d94d3ccc3abd3756b8438016766ff612185d371b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_882a5156642f206487afa09512edacc0c4f066363f0784954a49a66daa7bfa21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882a5156642f206487afa09512edacc0c4f066363f0784954a49a66daa7bfa21->enter($__internal_882a5156642f206487afa09512edacc0c4f066363f0784954a49a66daa7bfa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 56
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_882a5156642f206487afa09512edacc0c4f066363f0784954a49a66daa7bfa21->leave($__internal_882a5156642f206487afa09512edacc0c4f066363f0784954a49a66daa7bfa21_prof);

        
        $__internal_c9dcd2733afcc47351ad33f4d94d3ccc3abd3756b8438016766ff612185d371b->leave($__internal_c9dcd2733afcc47351ad33f4d94d3ccc3abd3756b8438016766ff612185d371b_prof);

    }

    // line 59
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_cbe06e449cee51c3c36a68b62e4b1cfab3a8539c518561956aa44dcc88a2f3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe06e449cee51c3c36a68b62e4b1cfab3a8539c518561956aa44dcc88a2f3a9->enter($__internal_cbe06e449cee51c3c36a68b62e4b1cfab3a8539c518561956aa44dcc88a2f3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6d05bee98eaa4b8f235710790ab1a5aa9303d70741e22bd8f83beb5e0c6f1eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d05bee98eaa4b8f235710790ab1a5aa9303d70741e22bd8f83beb5e0c6f1eda->enter($__internal_6d05bee98eaa4b8f235710790ab1a5aa9303d70741e22bd8f83beb5e0c6f1eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_6d05bee98eaa4b8f235710790ab1a5aa9303d70741e22bd8f83beb5e0c6f1eda->leave($__internal_6d05bee98eaa4b8f235710790ab1a5aa9303d70741e22bd8f83beb5e0c6f1eda_prof);

        
        $__internal_cbe06e449cee51c3c36a68b62e4b1cfab3a8539c518561956aa44dcc88a2f3a9->leave($__internal_cbe06e449cee51c3c36a68b62e4b1cfab3a8539c518561956aa44dcc88a2f3a9_prof);

    }

    // line 71
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_3dbc2a6645d9f1189927069c786075e7716222bde39c7dfafa0a4d7ed6b45b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbc2a6645d9f1189927069c786075e7716222bde39c7dfafa0a4d7ed6b45b04->enter($__internal_3dbc2a6645d9f1189927069c786075e7716222bde39c7dfafa0a4d7ed6b45b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_e8da98c1ed5de5801eafe90cd0ef38aa13f41b4738b21ae29bbccf9c86954fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8da98c1ed5de5801eafe90cd0ef38aa13f41b4738b21ae29bbccf9c86954fb0->enter($__internal_e8da98c1ed5de5801eafe90cd0ef38aa13f41b4738b21ae29bbccf9c86954fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_e8da98c1ed5de5801eafe90cd0ef38aa13f41b4738b21ae29bbccf9c86954fb0->leave($__internal_e8da98c1ed5de5801eafe90cd0ef38aa13f41b4738b21ae29bbccf9c86954fb0_prof);

        
        $__internal_3dbc2a6645d9f1189927069c786075e7716222bde39c7dfafa0a4d7ed6b45b04->leave($__internal_3dbc2a6645d9f1189927069c786075e7716222bde39c7dfafa0a4d7ed6b45b04_prof);

    }

    // line 82
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_2b93313d08ee67624e74c6c21a24130a204255de27dadb32cb5fdca5207101bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b93313d08ee67624e74c6c21a24130a204255de27dadb32cb5fdca5207101bd->enter($__internal_2b93313d08ee67624e74c6c21a24130a204255de27dadb32cb5fdca5207101bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_55d37b605ea99ec69e5592efe629fae5df273af40e4a107136727d3ea4aa94ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d37b605ea99ec69e5592efe629fae5df273af40e4a107136727d3ea4aa94ea->enter($__internal_55d37b605ea99ec69e5592efe629fae5df273af40e4a107136727d3ea4aa94ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_55d37b605ea99ec69e5592efe629fae5df273af40e4a107136727d3ea4aa94ea->leave($__internal_55d37b605ea99ec69e5592efe629fae5df273af40e4a107136727d3ea4aa94ea_prof);

        
        $__internal_2b93313d08ee67624e74c6c21a24130a204255de27dadb32cb5fdca5207101bd->leave($__internal_2b93313d08ee67624e74c6c21a24130a204255de27dadb32cb5fdca5207101bd_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_d4f7518d6673cb252dffa8c7d11c3ab49587209c73793614f5bea99a78a7ac22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f7518d6673cb252dffa8c7d11c3ab49587209c73793614f5bea99a78a7ac22->enter($__internal_d4f7518d6673cb252dffa8c7d11c3ab49587209c73793614f5bea99a78a7ac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b064fdf0983442cbd71ec037202d838227273fb32ca08f857d456aa6f5b81b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b064fdf0983442cbd71ec037202d838227273fb32ca08f857d456aa6f5b81b97->enter($__internal_b064fdf0983442cbd71ec037202d838227273fb32ca08f857d456aa6f5b81b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-6";
        
        $__internal_b064fdf0983442cbd71ec037202d838227273fb32ca08f857d456aa6f5b81b97->leave($__internal_b064fdf0983442cbd71ec037202d838227273fb32ca08f857d456aa6f5b81b97_prof);

        
        $__internal_d4f7518d6673cb252dffa8c7d11c3ab49587209c73793614f5bea99a78a7ac22->leave($__internal_d4f7518d6673cb252dffa8c7d11c3ab49587209c73793614f5bea99a78a7ac22_prof);

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
