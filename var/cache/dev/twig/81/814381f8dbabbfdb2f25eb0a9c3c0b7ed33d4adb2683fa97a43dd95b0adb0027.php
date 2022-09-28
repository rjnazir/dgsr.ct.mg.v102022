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
        $__internal_8d59680fd2180a13ee21ad7ec156d8279f5d7aef117f502fb3964ac4c1ab54e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d59680fd2180a13ee21ad7ec156d8279f5d7aef117f502fb3964ac4c1ab54e4->enter($__internal_8d59680fd2180a13ee21ad7ec156d8279f5d7aef117f502fb3964ac4c1ab54e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout_custom.html.twig"));

        $__internal_e57a34e83ee999b28e9236fe589443a1c5bd3d4e971810305f6435cdf03e9fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57a34e83ee999b28e9236fe589443a1c5bd3d4e971810305f6435cdf03e9fb6->enter($__internal_e57a34e83ee999b28e9236fe589443a1c5bd3d4e971810305f6435cdf03e9fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout_custom.html.twig"));

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
        
        $__internal_8d59680fd2180a13ee21ad7ec156d8279f5d7aef117f502fb3964ac4c1ab54e4->leave($__internal_8d59680fd2180a13ee21ad7ec156d8279f5d7aef117f502fb3964ac4c1ab54e4_prof);

        
        $__internal_e57a34e83ee999b28e9236fe589443a1c5bd3d4e971810305f6435cdf03e9fb6->leave($__internal_e57a34e83ee999b28e9236fe589443a1c5bd3d4e971810305f6435cdf03e9fb6_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_461ae5815bb8b6c0eebf933064d43602a2aa4e100581a31e011a35325f2aa0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461ae5815bb8b6c0eebf933064d43602a2aa4e100581a31e011a35325f2aa0b2->enter($__internal_461ae5815bb8b6c0eebf933064d43602a2aa4e100581a31e011a35325f2aa0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_78a8a6571c52b1b4f22befafbf31488a25158689ead12d5d71890c0a728b4659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a8a6571c52b1b4f22befafbf31488a25158689ead12d5d71890c0a728b4659->enter($__internal_78a8a6571c52b1b4f22befafbf31488a25158689ead12d5d71890c0a728b4659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_78a8a6571c52b1b4f22befafbf31488a25158689ead12d5d71890c0a728b4659->leave($__internal_78a8a6571c52b1b4f22befafbf31488a25158689ead12d5d71890c0a728b4659_prof);

        
        $__internal_461ae5815bb8b6c0eebf933064d43602a2aa4e100581a31e011a35325f2aa0b2->leave($__internal_461ae5815bb8b6c0eebf933064d43602a2aa4e100581a31e011a35325f2aa0b2_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_83951d70e62c9de1b78ba0a47b4c414b9e0526666d8f39a466faf1d6119757cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83951d70e62c9de1b78ba0a47b4c414b9e0526666d8f39a466faf1d6119757cd->enter($__internal_83951d70e62c9de1b78ba0a47b4c414b9e0526666d8f39a466faf1d6119757cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_631d31e8100646ce2e9eb5f91309b554f61eccfeb81b264f1e82c23c91b28a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631d31e8100646ce2e9eb5f91309b554f61eccfeb81b264f1e82c23c91b28a6d->enter($__internal_631d31e8100646ce2e9eb5f91309b554f61eccfeb81b264f1e82c23c91b28a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_631d31e8100646ce2e9eb5f91309b554f61eccfeb81b264f1e82c23c91b28a6d->leave($__internal_631d31e8100646ce2e9eb5f91309b554f61eccfeb81b264f1e82c23c91b28a6d_prof);

        
        $__internal_83951d70e62c9de1b78ba0a47b4c414b9e0526666d8f39a466faf1d6119757cd->leave($__internal_83951d70e62c9de1b78ba0a47b4c414b9e0526666d8f39a466faf1d6119757cd_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f42f0fd99cbd5d5136e8b691409dc23bf5773062ac12f90416464be34c01aee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42f0fd99cbd5d5136e8b691409dc23bf5773062ac12f90416464be34c01aee6->enter($__internal_f42f0fd99cbd5d5136e8b691409dc23bf5773062ac12f90416464be34c01aee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e09b4b9ca857530794f74a225824b31c959f643608d0a48e3d5a9f47979b2ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09b4b9ca857530794f74a225824b31c959f643608d0a48e3d5a9f47979b2ff7->enter($__internal_e09b4b9ca857530794f74a225824b31c959f643608d0a48e3d5a9f47979b2ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_e09b4b9ca857530794f74a225824b31c959f643608d0a48e3d5a9f47979b2ff7->leave($__internal_e09b4b9ca857530794f74a225824b31c959f643608d0a48e3d5a9f47979b2ff7_prof);

        
        $__internal_f42f0fd99cbd5d5136e8b691409dc23bf5773062ac12f90416464be34c01aee6->leave($__internal_f42f0fd99cbd5d5136e8b691409dc23bf5773062ac12f90416464be34c01aee6_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f3089d94f0ad5bfd10f5e4c7064b131a691acb03f8cc7d63141c8c4e62d7d150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3089d94f0ad5bfd10f5e4c7064b131a691acb03f8cc7d63141c8c4e62d7d150->enter($__internal_f3089d94f0ad5bfd10f5e4c7064b131a691acb03f8cc7d63141c8c4e62d7d150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6a852818a20520c0b76a5336e82319eb1910d7d63e0263be65d50425662b7572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a852818a20520c0b76a5336e82319eb1910d7d63e0263be65d50425662b7572->enter($__internal_6a852818a20520c0b76a5336e82319eb1910d7d63e0263be65d50425662b7572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_6a852818a20520c0b76a5336e82319eb1910d7d63e0263be65d50425662b7572->leave($__internal_6a852818a20520c0b76a5336e82319eb1910d7d63e0263be65d50425662b7572_prof);

        
        $__internal_f3089d94f0ad5bfd10f5e4c7064b131a691acb03f8cc7d63141c8c4e62d7d150->leave($__internal_f3089d94f0ad5bfd10f5e4c7064b131a691acb03f8cc7d63141c8c4e62d7d150_prof);

    }

    // line 35
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8497008996970f216abdc7b6e7a3c61eee4f7ae950def9aab05bb91f6b73afe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8497008996970f216abdc7b6e7a3c61eee4f7ae950def9aab05bb91f6b73afe6->enter($__internal_8497008996970f216abdc7b6e7a3c61eee4f7ae950def9aab05bb91f6b73afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d3bc83c097b99e3734048c4ee713754a24abc4f902ced7ff8716902eab74e520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bc83c097b99e3734048c4ee713754a24abc4f902ced7ff8716902eab74e520->enter($__internal_d3bc83c097b99e3734048c4ee713754a24abc4f902ced7ff8716902eab74e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 36
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d3bc83c097b99e3734048c4ee713754a24abc4f902ced7ff8716902eab74e520->leave($__internal_d3bc83c097b99e3734048c4ee713754a24abc4f902ced7ff8716902eab74e520_prof);

        
        $__internal_8497008996970f216abdc7b6e7a3c61eee4f7ae950def9aab05bb91f6b73afe6->leave($__internal_8497008996970f216abdc7b6e7a3c61eee4f7ae950def9aab05bb91f6b73afe6_prof);

    }

    // line 39
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6858113136d96623e0e9a1b361b7161608cda6f2947fef2e960ec7abb2a3ff11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6858113136d96623e0e9a1b361b7161608cda6f2947fef2e960ec7abb2a3ff11->enter($__internal_6858113136d96623e0e9a1b361b7161608cda6f2947fef2e960ec7abb2a3ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8237acbefcaec6c7e8199b13869b4ffc28ef916f624fc19a46007cd615b56c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8237acbefcaec6c7e8199b13869b4ffc28ef916f624fc19a46007cd615b56c41->enter($__internal_8237acbefcaec6c7e8199b13869b4ffc28ef916f624fc19a46007cd615b56c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_8237acbefcaec6c7e8199b13869b4ffc28ef916f624fc19a46007cd615b56c41->leave($__internal_8237acbefcaec6c7e8199b13869b4ffc28ef916f624fc19a46007cd615b56c41_prof);

        
        $__internal_6858113136d96623e0e9a1b361b7161608cda6f2947fef2e960ec7abb2a3ff11->leave($__internal_6858113136d96623e0e9a1b361b7161608cda6f2947fef2e960ec7abb2a3ff11_prof);

    }

    // line 43
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_d6159ca5efcbae837113d1169191e20777c235fe9c616a63dd66916e711fd969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6159ca5efcbae837113d1169191e20777c235fe9c616a63dd66916e711fd969->enter($__internal_d6159ca5efcbae837113d1169191e20777c235fe9c616a63dd66916e711fd969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_80718c7ccd54b309fe7a7150a168e9c63183bb4815e9c9bb20560cf709c7b006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80718c7ccd54b309fe7a7150a168e9c63183bb4815e9c9bb20560cf709c7b006->enter($__internal_80718c7ccd54b309fe7a7150a168e9c63183bb4815e9c9bb20560cf709c7b006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_80718c7ccd54b309fe7a7150a168e9c63183bb4815e9c9bb20560cf709c7b006->leave($__internal_80718c7ccd54b309fe7a7150a168e9c63183bb4815e9c9bb20560cf709c7b006_prof);

        
        $__internal_d6159ca5efcbae837113d1169191e20777c235fe9c616a63dd66916e711fd969->leave($__internal_d6159ca5efcbae837113d1169191e20777c235fe9c616a63dd66916e711fd969_prof);

    }

    // line 55
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c8bb0bacbd434ed8ca11fc222f3750982bafe956aa8ed90c0313766182023fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bb0bacbd434ed8ca11fc222f3750982bafe956aa8ed90c0313766182023fd7->enter($__internal_c8bb0bacbd434ed8ca11fc222f3750982bafe956aa8ed90c0313766182023fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_18c4bd318984ffbbb3d5cc0cc7a5a89049e759d794919662f9d2579da425e915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c4bd318984ffbbb3d5cc0cc7a5a89049e759d794919662f9d2579da425e915->enter($__internal_18c4bd318984ffbbb3d5cc0cc7a5a89049e759d794919662f9d2579da425e915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_18c4bd318984ffbbb3d5cc0cc7a5a89049e759d794919662f9d2579da425e915->leave($__internal_18c4bd318984ffbbb3d5cc0cc7a5a89049e759d794919662f9d2579da425e915_prof);

        
        $__internal_c8bb0bacbd434ed8ca11fc222f3750982bafe956aa8ed90c0313766182023fd7->leave($__internal_c8bb0bacbd434ed8ca11fc222f3750982bafe956aa8ed90c0313766182023fd7_prof);

    }

    // line 66
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_b37b0ae8ebc579c261315ad101c99fa710b3f25504e4c9d7c1715fe9025465a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37b0ae8ebc579c261315ad101c99fa710b3f25504e4c9d7c1715fe9025465a5->enter($__internal_b37b0ae8ebc579c261315ad101c99fa710b3f25504e4c9d7c1715fe9025465a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_511dd037ca65a0edf1d1bd5a431cd978907dbae44716a1755487a968ebd7c121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511dd037ca65a0edf1d1bd5a431cd978907dbae44716a1755487a968ebd7c121->enter($__internal_511dd037ca65a0edf1d1bd5a431cd978907dbae44716a1755487a968ebd7c121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_511dd037ca65a0edf1d1bd5a431cd978907dbae44716a1755487a968ebd7c121->leave($__internal_511dd037ca65a0edf1d1bd5a431cd978907dbae44716a1755487a968ebd7c121_prof);

        
        $__internal_b37b0ae8ebc579c261315ad101c99fa710b3f25504e4c9d7c1715fe9025465a5->leave($__internal_b37b0ae8ebc579c261315ad101c99fa710b3f25504e4c9d7c1715fe9025465a5_prof);

    }

    // line 77
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_9f8e00eebf3cc5c3202a18bc814062cb9ba64d7b8e1bbc1b5dc1d48ff4ac9d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8e00eebf3cc5c3202a18bc814062cb9ba64d7b8e1bbc1b5dc1d48ff4ac9d8e->enter($__internal_9f8e00eebf3cc5c3202a18bc814062cb9ba64d7b8e1bbc1b5dc1d48ff4ac9d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_57c4112ab7d01e4598534d4c6a086f4af895033a520d1a4831e73b97ec752943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c4112ab7d01e4598534d4c6a086f4af895033a520d1a4831e73b97ec752943->enter($__internal_57c4112ab7d01e4598534d4c6a086f4af895033a520d1a4831e73b97ec752943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 78
        echo "col-sm-6";
        
        $__internal_57c4112ab7d01e4598534d4c6a086f4af895033a520d1a4831e73b97ec752943->leave($__internal_57c4112ab7d01e4598534d4c6a086f4af895033a520d1a4831e73b97ec752943_prof);

        
        $__internal_9f8e00eebf3cc5c3202a18bc814062cb9ba64d7b8e1bbc1b5dc1d48ff4ac9d8e->leave($__internal_9f8e00eebf3cc5c3202a18bc814062cb9ba64d7b8e1bbc1b5dc1d48ff4ac9d8e_prof);

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
