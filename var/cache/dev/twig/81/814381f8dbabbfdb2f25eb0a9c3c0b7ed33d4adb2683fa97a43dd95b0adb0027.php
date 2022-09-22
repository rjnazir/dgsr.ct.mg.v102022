<?php

/* form/bootstrap_3_horizontal_layout_custom.html.twig */
class __TwigTemplate_c6e27a763cb765a171a1ac9a70d7b6f6287f3f5520f4b31ba692f19b6896d1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "form/bootstrap_3_horizontal_layout_custom.html.twig", 1);
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
        $__internal_4efe8b247db630870afcd2eace47cb660c2864b68891a6829624880976ae8b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efe8b247db630870afcd2eace47cb660c2864b68891a6829624880976ae8b80->enter($__internal_4efe8b247db630870afcd2eace47cb660c2864b68891a6829624880976ae8b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout_custom.html.twig"));

        $__internal_2dce8a6b240ba192402c783544612656ac6faa93e622f09fc0e95e455d25f68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dce8a6b240ba192402c783544612656ac6faa93e622f09fc0e95e455d25f68f->enter($__internal_2dce8a6b240ba192402c783544612656ac6faa93e622f09fc0e95e455d25f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout_custom.html.twig"));

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
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('radio_row', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('submit_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('reset_row', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_4efe8b247db630870afcd2eace47cb660c2864b68891a6829624880976ae8b80->leave($__internal_4efe8b247db630870afcd2eace47cb660c2864b68891a6829624880976ae8b80_prof);

        
        $__internal_2dce8a6b240ba192402c783544612656ac6faa93e622f09fc0e95e455d25f68f->leave($__internal_2dce8a6b240ba192402c783544612656ac6faa93e622f09fc0e95e455d25f68f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d2fbd9d22ebe8b93d3f2f8f4fb77de7a35d7fe98c2bbee5634a81535c21d6103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fbd9d22ebe8b93d3f2f8f4fb77de7a35d7fe98c2bbee5634a81535c21d6103->enter($__internal_d2fbd9d22ebe8b93d3f2f8f4fb77de7a35d7fe98c2bbee5634a81535c21d6103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_319e1499d286533a107635241837e13abf6f03db6769369a7899441a21965dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319e1499d286533a107635241837e13abf6f03db6769369a7899441a21965dc9->enter($__internal_319e1499d286533a107635241837e13abf6f03db6769369a7899441a21965dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_319e1499d286533a107635241837e13abf6f03db6769369a7899441a21965dc9->leave($__internal_319e1499d286533a107635241837e13abf6f03db6769369a7899441a21965dc9_prof);

        
        $__internal_d2fbd9d22ebe8b93d3f2f8f4fb77de7a35d7fe98c2bbee5634a81535c21d6103->leave($__internal_d2fbd9d22ebe8b93d3f2f8f4fb77de7a35d7fe98c2bbee5634a81535c21d6103_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_428e2fab6032682effc6f6e791ae21d3389eea80b5b686bd806b84a00435da10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428e2fab6032682effc6f6e791ae21d3389eea80b5b686bd806b84a00435da10->enter($__internal_428e2fab6032682effc6f6e791ae21d3389eea80b5b686bd806b84a00435da10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_89e45541909bace02c51ec7686b93ebf888505d9c0b63f46d0bb4b47db86e2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e45541909bace02c51ec7686b93ebf888505d9c0b63f46d0bb4b47db86e2ab->enter($__internal_89e45541909bace02c51ec7686b93ebf888505d9c0b63f46d0bb4b47db86e2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_89e45541909bace02c51ec7686b93ebf888505d9c0b63f46d0bb4b47db86e2ab->leave($__internal_89e45541909bace02c51ec7686b93ebf888505d9c0b63f46d0bb4b47db86e2ab_prof);

        
        $__internal_428e2fab6032682effc6f6e791ae21d3389eea80b5b686bd806b84a00435da10->leave($__internal_428e2fab6032682effc6f6e791ae21d3389eea80b5b686bd806b84a00435da10_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0ca602afb42b95a786d9109aadd9701b1d14927fabe1a108f161566c126ee772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca602afb42b95a786d9109aadd9701b1d14927fabe1a108f161566c126ee772->enter($__internal_0ca602afb42b95a786d9109aadd9701b1d14927fabe1a108f161566c126ee772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b924aada0fdeaba9794a35de4608cf5df0723edcc35fc167b1d045a2274dc7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b924aada0fdeaba9794a35de4608cf5df0723edcc35fc167b1d045a2274dc7cc->enter($__internal_b924aada0fdeaba9794a35de4608cf5df0723edcc35fc167b1d045a2274dc7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_b924aada0fdeaba9794a35de4608cf5df0723edcc35fc167b1d045a2274dc7cc->leave($__internal_b924aada0fdeaba9794a35de4608cf5df0723edcc35fc167b1d045a2274dc7cc_prof);

        
        $__internal_0ca602afb42b95a786d9109aadd9701b1d14927fabe1a108f161566c126ee772->leave($__internal_0ca602afb42b95a786d9109aadd9701b1d14927fabe1a108f161566c126ee772_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2e6acb49f778f264f0fb0c0d2fddff70f637d3188d3d5dde896db731a43c0948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6acb49f778f264f0fb0c0d2fddff70f637d3188d3d5dde896db731a43c0948->enter($__internal_2e6acb49f778f264f0fb0c0d2fddff70f637d3188d3d5dde896db731a43c0948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1622335e44a05302725b831aa66a8627518e9c3fb951d99098ab615454e721c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1622335e44a05302725b831aa66a8627518e9c3fb951d99098ab615454e721c9->enter($__internal_1622335e44a05302725b831aa66a8627518e9c3fb951d99098ab615454e721c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error ";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
        ";
        // line 32
        echo "</div>";
        
        $__internal_1622335e44a05302725b831aa66a8627518e9c3fb951d99098ab615454e721c9->leave($__internal_1622335e44a05302725b831aa66a8627518e9c3fb951d99098ab615454e721c9_prof);

        
        $__internal_2e6acb49f778f264f0fb0c0d2fddff70f637d3188d3d5dde896db731a43c0948->leave($__internal_2e6acb49f778f264f0fb0c0d2fddff70f637d3188d3d5dde896db731a43c0948_prof);

    }

    // line 35
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_392ae8f2560e9aff0d9b62c725470d63b28ec56b26e723ce83003b697acff357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392ae8f2560e9aff0d9b62c725470d63b28ec56b26e723ce83003b697acff357->enter($__internal_392ae8f2560e9aff0d9b62c725470d63b28ec56b26e723ce83003b697acff357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f5a56eab245f2995911c3ba164de4a49a9d4754958498cec9bfe82bebbed094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a56eab245f2995911c3ba164de4a49a9d4754958498cec9bfe82bebbed094d->enter($__internal_f5a56eab245f2995911c3ba164de4a49a9d4754958498cec9bfe82bebbed094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 36
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_f5a56eab245f2995911c3ba164de4a49a9d4754958498cec9bfe82bebbed094d->leave($__internal_f5a56eab245f2995911c3ba164de4a49a9d4754958498cec9bfe82bebbed094d_prof);

        
        $__internal_392ae8f2560e9aff0d9b62c725470d63b28ec56b26e723ce83003b697acff357->leave($__internal_392ae8f2560e9aff0d9b62c725470d63b28ec56b26e723ce83003b697acff357_prof);

    }

    // line 39
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_99149c661647a392cb7a8a87b873998eba46125f1d1ee606d832561add65702c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99149c661647a392cb7a8a87b873998eba46125f1d1ee606d832561add65702c->enter($__internal_99149c661647a392cb7a8a87b873998eba46125f1d1ee606d832561add65702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fe788d12274b6a685d59af510c4da98941a98141f6ccc818c9c963b0d48eff41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe788d12274b6a685d59af510c4da98941a98141f6ccc818c9c963b0d48eff41->enter($__internal_fe788d12274b6a685d59af510c4da98941a98141f6ccc818c9c963b0d48eff41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_fe788d12274b6a685d59af510c4da98941a98141f6ccc818c9c963b0d48eff41->leave($__internal_fe788d12274b6a685d59af510c4da98941a98141f6ccc818c9c963b0d48eff41_prof);

        
        $__internal_99149c661647a392cb7a8a87b873998eba46125f1d1ee606d832561add65702c->leave($__internal_99149c661647a392cb7a8a87b873998eba46125f1d1ee606d832561add65702c_prof);

    }

    // line 43
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_b1e6b989cfd7b74847c51bebb85f0128d503926700fd090fadbaf919f62c35cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e6b989cfd7b74847c51bebb85f0128d503926700fd090fadbaf919f62c35cc->enter($__internal_b1e6b989cfd7b74847c51bebb85f0128d503926700fd090fadbaf919f62c35cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_d7436c03b423f56e489d7d697a56e0af756ec309aa3a644fe598b03dd30a97ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7436c03b423f56e489d7d697a56e0af756ec309aa3a644fe598b03dd30a97ed->enter($__internal_d7436c03b423f56e489d7d697a56e0af756ec309aa3a644fe598b03dd30a97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 44
        ob_start();
        // line 45
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 46
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 47
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d7436c03b423f56e489d7d697a56e0af756ec309aa3a644fe598b03dd30a97ed->leave($__internal_d7436c03b423f56e489d7d697a56e0af756ec309aa3a644fe598b03dd30a97ed_prof);

        
        $__internal_b1e6b989cfd7b74847c51bebb85f0128d503926700fd090fadbaf919f62c35cc->leave($__internal_b1e6b989cfd7b74847c51bebb85f0128d503926700fd090fadbaf919f62c35cc_prof);

    }

    // line 55
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4e76765b022ca601d959fc7921caaecb174487facda07a15f67180c994438f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e76765b022ca601d959fc7921caaecb174487facda07a15f67180c994438f47->enter($__internal_4e76765b022ca601d959fc7921caaecb174487facda07a15f67180c994438f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_51851d743a6bf8684341dd219656a43294e5db33923478904d9b85147d2ef2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51851d743a6bf8684341dd219656a43294e5db33923478904d9b85147d2ef2a1->enter($__internal_51851d743a6bf8684341dd219656a43294e5db33923478904d9b85147d2ef2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 56
        ob_start();
        // line 57
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 58
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 59
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_51851d743a6bf8684341dd219656a43294e5db33923478904d9b85147d2ef2a1->leave($__internal_51851d743a6bf8684341dd219656a43294e5db33923478904d9b85147d2ef2a1_prof);

        
        $__internal_4e76765b022ca601d959fc7921caaecb174487facda07a15f67180c994438f47->leave($__internal_4e76765b022ca601d959fc7921caaecb174487facda07a15f67180c994438f47_prof);

    }

    // line 66
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_207b94189f7b5ee0b02e889d37a3da8dd17ab097c0006f9e04ddf2fbd9176615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207b94189f7b5ee0b02e889d37a3da8dd17ab097c0006f9e04ddf2fbd9176615->enter($__internal_207b94189f7b5ee0b02e889d37a3da8dd17ab097c0006f9e04ddf2fbd9176615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2db46c522789b6c27094d010c41380c9bb5acc2636adbb388ddeaa1d56ae30bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db46c522789b6c27094d010c41380c9bb5acc2636adbb388ddeaa1d56ae30bc->enter($__internal_2db46c522789b6c27094d010c41380c9bb5acc2636adbb388ddeaa1d56ae30bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 67
        ob_start();
        // line 68
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 69
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 70
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2db46c522789b6c27094d010c41380c9bb5acc2636adbb388ddeaa1d56ae30bc->leave($__internal_2db46c522789b6c27094d010c41380c9bb5acc2636adbb388ddeaa1d56ae30bc_prof);

        
        $__internal_207b94189f7b5ee0b02e889d37a3da8dd17ab097c0006f9e04ddf2fbd9176615->leave($__internal_207b94189f7b5ee0b02e889d37a3da8dd17ab097c0006f9e04ddf2fbd9176615_prof);

    }

    // line 77
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_612082aebaf149b96a0894e9c681f2143e83e69c9b659b756bc1e5610bdf473b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612082aebaf149b96a0894e9c681f2143e83e69c9b659b756bc1e5610bdf473b->enter($__internal_612082aebaf149b96a0894e9c681f2143e83e69c9b659b756bc1e5610bdf473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a54bf6ab8367a87038bc6fd863cb5218bd5f5ae07f5c19828cd68d7fbaca2113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54bf6ab8367a87038bc6fd863cb5218bd5f5ae07f5c19828cd68d7fbaca2113->enter($__internal_a54bf6ab8367a87038bc6fd863cb5218bd5f5ae07f5c19828cd68d7fbaca2113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 78
        echo "col-sm-6";
        
        $__internal_a54bf6ab8367a87038bc6fd863cb5218bd5f5ae07f5c19828cd68d7fbaca2113->leave($__internal_a54bf6ab8367a87038bc6fd863cb5218bd5f5ae07f5c19828cd68d7fbaca2113_prof);

        
        $__internal_612082aebaf149b96a0894e9c681f2143e83e69c9b659b756bc1e5610bdf473b->leave($__internal_612082aebaf149b96a0894e9c681f2143e83e69c9b659b756bc1e5610bdf473b_prof);

    }

    public function getTemplateName()
    {
        return "form/bootstrap_3_horizontal_layout_custom.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  387 => 78,  378 => 77,  363 => 71,  359 => 70,  355 => 69,  352 => 68,  350 => 67,  341 => 66,  326 => 60,  322 => 59,  318 => 58,  315 => 57,  313 => 56,  304 => 55,  289 => 49,  285 => 48,  281 => 47,  277 => 46,  270 => 45,  268 => 44,  259 => 43,  249 => 40,  240 => 39,  230 => 36,  221 => 35,  211 => 32,  208 => 31,  206 => 30,  204 => 29,  200 => 28,  198 => 27,  192 => 26,  183 => 25,  173 => 22,  164 => 21,  152 => 16,  149 => 15,  143 => 13,  140 => 12,  138 => 11,  129 => 10,  119 => 5,  117 => 4,  108 => 3,  98 => 77,  95 => 76,  93 => 66,  90 => 65,  88 => 55,  85 => 54,  83 => 43,  80 => 42,  78 => 39,  75 => 38,  73 => 35,  70 => 34,  68 => 25,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
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
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error {% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
        {##}</div>
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
", "form/bootstrap_3_horizontal_layout_custom.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\form\\bootstrap_3_horizontal_layout_custom.html.twig");
    }
}
